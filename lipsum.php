<?php
	$lipsum[0] = "For instance, on the planet Earth, man had always assumed that he was more intelligent than dolphins because he had achieved so much—the wheel, New York, wars and so on—whilst all the dolphins had ever done was muck about in the water having a good time. But conversely, the dolphins had always believed that they were far more intelligent than man—for precisely the same reasons.";

	$lipsum[1] = "A towel, [The Hitchhiker's Guide to the Galaxy] says, is about the most massively useful thing an interstellar hitchhiker can have. Partly it has great practical value. You can wrap it around you for warmth as you bound across the cold moons of Jaglan Beta; you can lie on it on the brilliant marble-sanded beaches of Santraginus V, inhaling the heady sea vapors; you can sleep under it beneath the stars which shine so redly on the desert world of Kakrafoon; use it to sail a miniraft down the slow heavy River Moth; wet it for use in hand-to-hand-combat; wrap it round your head to ward off noxious fumes or avoid the gaze of the Ravenous Bugblatter Beast of Traal (such a mind-boggingly stupid animal, it assumes that if you can't see it, it can't see you); you can wave your towel in emergencies as a distress signal, and of course dry yourself off with it if it still seems to be clean enough.";

	$lipsum[2] = "This planet has - or rather had - a problem, which was this: most of the people living on it were unhappy for pretty much of the time. Many solutions were suggested for this problem, but most of these were largely concerned with the movement of small green pieces of paper, which was odd because on the whole it wasn't the small green pieces of paper that were unhappy.";

	$lipsum[3] = "Far out in the uncharted backwaters of the unfashionable end of the western spiral arm of the Galaxy lies a small unregarded yellow sun. Orbiting this at a distance of roughly ninety-two million miles is an utterly insignificant little blue green planet whose ape-descended life forms are so amazingly primitive that they still think digital watches are a pretty neat idea.";

	$lipsum[4] = "Bypasses are devices that allow some people to dash from point A to point B very fast while other people dash from point B to point A very fast. People living at point C, being a point directly in between, are often given to wonder what's so great about point A that so many people from point B are so keen to get there, and what's so great about point B that so many people from point A are so keen to get there. They often wish that people would just once and for all work out where the hell they wanted to be.";

	$lipsum[5] = "And then, one Thursday, nearly two thousand years after one man had been nailed to a tree for saying how great it would be to be nice to people for a change, a girl sitting on her own in a small café in Rickmansworth suddenly realized what it was that had been going wrong all this time, and she finally knew how the world could be made a good and happy place. This time it was right, it would work, and no one would have to get nailed to anything.";

	$lipsum[6] = "One of the major difficulties Trillian experienced in her relationship with Zaphod was learning to distinguish between him pretending to be stupid just to get people off their guard, pretending to be stupid because he couldn't be bothered to think and wanted someone else to do it for him, pretending to be outrageously stupid to hide the fact that he didn't actually understand what was going on, and really being genuinely stupid.";

	$lipsum[7] = "Good. Ooooh, it’s getting quite strong. And hey, what’s about this whistling roaring sound going past what I’m suddenly going to call my head? Perhaps I can call that … wind! Is that a good name? It’ll do … perhaps I can find a better name for it later when I’ve found out what it’s for. It must be something very important because there certainly seems to be a hell of a lot of it. Hey! What’s this thing? This … let’s call it a tail – yeah, tail. Hey! I can can really thrash it about pretty good can’t I? Wow! Wow! That feels great! Doesn’t seem to achieve very much but I’ll probably find out what it’s for later on. Now – have I built up any coherent picture of things yet?";

	$lipsum[8] = "One of the things Ford Prefect had always found hardest to understand about humans was their habit of continually stating and repeating the very very obvious, as in It's a nice day, or You're very tall, or Oh dear you seem to have fallen down a thirty-foot well, are you alright?";

	$lipsum[9] = "In many of the more relaxed civilizations on the Outer Eastern Rim of the Galaxy, the Hitch-Hiker's Guide has already supplanted the great Encyclopaedia Galactica as the standard repository of all knowledge and wisdom, for though it has many omissions and contains much that is apocryphal, or at least wildly inaccurate, it scores over the older, more pedestrian work in two important respects. First, it is slightly cheaper; and secondly it has the words DON'T PANIC inscribed in large friendly letters on its cover.";

	$lipsum[10] = "...There was no way his imagination could feel the impact of the whole Earth having gone, it was too big. He prodded his feelings by thinking that his parent and his sister had gone. No reaction.He thought of all the people he had been close to. No reaction. Then he thought of a complete stranger he had been standing behind in the queue at the supermarket two days before and felt a sudden stab: the supermarket was gone, everyone in it was gone! Nelson’s Column had gone! and there would be no outcry, because there was no one left to make an outcry! From now on Nelson’s Column only existed in his mind. England only existed in his mind. A wave of claustrophobia closed in on him.";
	
	$lipsum[11] = "There’s no point in acting surprised about it. All the planning charts and demolition orders have been on display at your local planning department in Alpha Centauri for 50 of your Earth years, so you’ve had plenty of time to lodge any formal complaint and it’s far too late to start making a fuss about it now. … What do you mean you’ve never been to Alpha Centauri? Oh, for heaven’s sake, mankind, it’s only four light years away, you know. I’m sorry, but if you can’t be bothered to take an interest in local affairs, that’s your own lookout. Energize the demolition beams.";

	$str =  $lipsum[rand(0,count($lipsum))-1];
	
	if ($str == "") {
		$str = "Lorem ipsum dolor sit amet whatever";
	}

	echo $str;

