<?php include $_SERVER['DOCUMENT_ROOT'].'/site-parts/code-text.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>The Future of AI</title>

	<meta charset="utf-8">
	<meta name="description" content="Learn why AI won't take over the world with this interview that a middle schooler Chanelle Baldwin conducted of me.">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="/school/isearch/general-styles.css">
	<link rel="stylesheet" type="text/css" href="/school/isearch/article.css">
	<link rel="stylesheet" type="text/css" href="styles.css">

	<?php require $_SERVER['DOCUMENT_ROOT'].'/site-parts/head-tags.php'; ?>
</head>
<body>
	<?php include $_SERVER['DOCUMENT_ROOT'].'/school/isearch/nav.php'; ?>
	
	<article>
		<h2 id="article-title">An Interview With Jack Wilson</h2>
		<h3>Interviewer: Chanelle Baldwin</h3>
		<h3>Interviewee: Jack Wilson</h3>

		<p class="interviewer">
			<strong>Chanelle Baldwin: </strong>What got you interested in AI?
		</p>
		<p>
			<strong>Jack Wilson: </strong>Video Games. One of the biggest breakthroughs in the past couple of years was a paper published by some guy at UFC where he played I think six or seven Atari Games with the deep neural network to train from scratch, right. It was a lot better than humans and it was just a huge breakthrough. It would only look at pixels, and purely based off of visual images and to learn to play games better than humans. And I guess I read that paper, I was like, wow, holy crap, this is amazing right? Now, this is the kind of stuff I want to do because the other stuff you do with a CS degree, it's like, oh yeah, I'll make the website. I mean you get to make a lot of money but it's boring as hell.
		</p>
		<p class="interviewer">
			<strong>CB: </strong>What do you do at BAIR?
		</p>
		<p>
			<strong>JW: </strong>So my research currently is on imitation, which is basically kind of teaching a robot to follow your demonstrations roughly. So basically you teach it, some family of tasks, right? It might be like stacking blocks or something or like following some trajectory, like a little mobile robot wandering around, you know, you show it how to move and it learns to follow how you move based off individuals, right. Which is super interesting, I think. It has some applications and industry could be like, you know, you show it any of a finished product, like in manufacturing and it could just learn to do that by itself based off of where it is right now, like you showed, give it a bunch of parts, show the final image and if it could learn to a completely assembled thing by itself on its own, that'd be super cool. Unfortunately, you know, we aren't there yet. Research is making progress.
		</p>
		<p class="interviewer">
			<strong>CB: </strong>From what you've seen, do you think AI and robots will become self-aware eventually?
		</p>
		<p>
			<strong>JW: </strong>If you look at the state of it now, it's like Copernicus looking out into the stars, like, that's where we are. Like, maybe the ultimate goal is space travel and we're, you know, we're still not quite there yet, but we're just looking in – we have some very basic tools with some very clever people that have figured out how to do very interesting things, but, like, the state of the field just isn't quite there yet. I'd say like 90% of the industry, what they really do, when it comes down to it, is they draw lines through data, right? So you want to do is use an AI predict stock prices, right? So you see this, you want to fit a line through data. It doesn't have to be like a straight line, just the right fit for clients. Do you think this is, like, real intelligence? No, this is just basic, well not basic like mathematics, right? We wanted to try to approximate some functions, right? What I mean by that is there are some functions that are just super complicated. If you think in like 10,000 variables, like think about how you can get at a function like that. It’s ridiculous, and there's something, like, even different, more difficult because it's like if you give it an image of a cat, want the functions to be able to return, hey this is a cat.
		</p>
		<p class="interviewer">
			<strong>CB: </strong>How does it do that?
		</p>
		<p>
			<strong>JW: </strong>What the algorithm does is it kind of sidesteps actually having a function by just using some linear algebra and calculus to just decide approximately. So basically what you do is you give it, you know, a picture of a cat and you tell him, hey dude, this is a cat. And you do this, like, tens of thousands of times with different pictures of cats and then eventually kind of like, well, we don't really know what it does, but the basic idea is that you can use a bunch of pictures of a cat and you’re told that it is a cat. You’ll kind of recognize some features that might make this a category. Like, “Oh yeah, this one has, like, a sharp corner at the fear on its head was probably categorize that kind of thing.” So then, um, eventually learns if you show it enough times. And that's how they do image recognition. There was nothing special going on. It's like basic addition and multiplication, right? So these are the tools we just figured out. So they might be very, very good tools in practice, but they're super dumb right there. They're not going to take over the world anytime soon.
		</p>
		<p class="interviewer">
			<strong>CB: </strong>Is there anything that worries you in AI?
		</p>
		<p>
			<strong>JW: </strong>How little of it works. Everyone says it's going to take over those jobs and how powerful it is, but it's all just wishy-washy, like media hysteria. But the worry is how fragile most of it is. What worries me is how little of the math we actually understand. Our systems, like, do really, really well, but I mean other than the fact that we know that somebody proved that our AI can fully approximate any function. Like, we just don't know how to interpret it, how it actually approximates, and what best guidelines to train it are. Like a lot of these we just do what's called hyper-parameters through just, like, you know, try to train the same thing like 20 times. One of them works, and we’re just like: Yay, that didn’t fail. The fails don’t matter because you've got one to work. It's like stuff like that.
		</p>

		<p id="citation">
			<a class="citation" href="/school/isearch/mgp/works-cited/#luo">Luo, Michael. Interview. 24 Feb. 2018.</a>
		</p>
	</article>
</body>
</html>