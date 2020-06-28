<?php
namespace MyApp;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class Rps implements MessageComponentInterface {
    protected $clients;

    public function __construct() {
        $this->clients = new \SplObjectStorage;
        echo "Tictactoe server has sucessfully started!\n";
    }

    public function onOpen(ConnectionInterface $conn) {
        // Store the new connection to send messages to later
        if ($this->clients->count() < 2) {

            $this->clients->attach($conn);

             echo "New connection! ({$conn->resourceId})";

            if ($this->clients->count() == 2) {
                echo ", game can start.";
                foreach ($this->clients as $client) {
                    $client->send("sys:gamestart");
                }
            }
            echo "\n";
        }
        else {
            echo "Too many players: Connection {$conn->resourceId} was unable to join.\n"
        }
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        echo sprintf('Connection %d sent "%s"'."\n"
            , $from->resourceId, $msg);

        foreach ($this->clients as $client) {
            if ($from !== $client) {
                // The sender is not the receiver, send to each client connected
                $client->send($msg);
            }
        }
    }

    public function onClose(ConnectionInterface $conn) {
        // The connection is closed, remove it, as we can no longer send it messages
        $this->clients->detach($conn);

        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }
}

?>