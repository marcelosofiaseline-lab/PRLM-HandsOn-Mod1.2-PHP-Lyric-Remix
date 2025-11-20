<?php 
    $title = "Dance With You";
    $artist = "Huening Kai from TXT";
    $album = "Together Album";
    $type = "Contemporary R&B and Latin Dance-Pop";

    $nouns = ["you", "steps", "hands"];
    $verbs = ["Matching", "hold", "dance", "wanna"];
    $adjectives = ["sweet", "dazzling"];


    $verse = "2";
    $chorus = 2;
    $prechorus = "2";
    $postchorus = 2;

    $totalsections = $verse + $chorus + $prechorus + $postchorus;

    $danceTextInChorus = "6";
    $totalDanceRepeats = $danceTextInChorus * 2;
    
    $verse1 = [
        "Closer",
        "I want to know {$nouns[0]}, down to the depths of your heart
        Slow down",
        "As I rewind {$nouns[0]}, I become your mirror",
        "I'm captivated by your every move",
        "Your tone of voice, the way {$nouns[0]} breathe",
        "I want even those to be the same",

    ];

    $prechorus1 = [
        "Let’s walk side by side",
        "{$verbs[0]} our {$nouns[1]}, {$verbs[0]} our {$nouns[1]}",
        "I read {$nouns[0]} through the tips of our touching fingers",
    ];

    $chorus1 = [
        "I {$verbs[3]} {$verbs[2]} with {$nouns[0]}, hold {$verbs[1]} with {$nouns[0]}",
        "A {$verbs[2]} we share, heart to heart",
        "Completely entrusting myself to {$nouns[0]}, {$nouns[0]} to me",
        "Two becoming onе, I {$verbs[3]} {$verbs[2]} with {$nouns[0]}",
        "(I {$verbs[3]} {$verbs[2]} with {$nouns[0]}, hold {$nouns[2]} with {$nouns[0]})",
        "(A {$verbs[2]} wе share, heart to heart)",
        "(Completely entrusting myself to {$nouns[0]}, {$nouns[0]} to me)",
        "(Two becoming one, I {$verbs[3]} {$verbs[2]} with {$nouns[0]})",
    ];

    $postchorus1 = [
        "I {$verbs[3]} {$verbs[2]} with {$nouns[0]}",
        "I {$verbs[3]} {$verbs[2]} with {$nouns[0]}",
    ];

    $verse2 = [
        "One step, two {$nouns[1]}",
        "I'll come closer to {$nouns[0]}",
        "Our cheeks touch",
        "And the tremble of two hearts becomes one",
        "A private ball just for us, a {$adjectives[1]} moonlight",
        "A starry night we'll remember forever",
    ];

    $prechorus2 = [
        "With me",
        "{$verbs[0]} our {$nouns[1]}, {$verbs[0]} our {$nouns[1]}",
        "Let me see the parts of {$nouns[0]} even {$nouns[0]} don’t know",
    ];

    $chorus2 = [
        "I {$verbs[3]} {$verbs[2]} with {$nouns[0]}, hold {$nouns[2]} with {$nouns[0]}",
        "This long, {$adjectives[1]} {$verbs[2]} that can't be done alone (Yeah)",
        "Completely entrusting myself to {$nouns[0]}, {$nouns[0]} to me",
        "Two becoming one, I {$verbs[3]} {$verbs[2]} with {$nouns[0]}",
        "(I {$verbs[3]} {$verbs[2]} with {$nouns[0]}, hold {$nouns[2]} with {$nouns[0]})",
        "(This long, {$adjectives[1]} {$verbs[2]} that can't be done alone)",
        "(Completely entrusting myself to {$nouns[0]}, {$nouns[0]} to me)",
        "(Two becoming one, I {$verbs[3]} {$verbs[2]} with {$nouns[0]})",
    ];

    $postchorus2 = $postchorus1;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dance With You (By Huening Kai from TXT)</title>
    <style>
        body {
            font-family: Monospace;
            padding: 20px;
            color: white;
            background: linear-gradient(135deg, blue, lightblue);
        }

        p {
            margin-bottom: 20px;
        }

        h4 {
            margin-top: 40px;
        }

        img {
            height: 160px;
            width: 240px;
            float: left;
            margin-right: 40px;
        }
        
    </style>
</head>
<body>
    <img src="https://shoptxtofficial.com/cdn/shop/files/TXT-00005_-_The_Star_Chapter__TOGETHER_M.png?v=1750899146&width=800"
        alt="TXT TOGETHER ALBUM">
    <h1>Title: <?php echo $title; ?></h1>
    <h2>Album: <?php echo $album; ?></h2>
    <h3>Artist: <?php echo $artist; ?></h3>
    <h3>Type of Song: <?php echo $type; ?> <br></h3>

    <h1>⊹₊⟡⋆♪‧₊˚˙⋆✮. ݁₊ ⊹ . ݁ ⟡ ݁ . ⊹ ₊ ݁.✮⋆˙˚₊‧♪ᯓ★ˎˊ˗</h1>
    <h4>[Verse 1]</h4>
    <?php foreach ($verse1 as $line) echo "<p>$line</p>"; ?>

    <h4>[Pre-Chorus]</h4>
    <?php foreach ($prechorus1 as $line) echo "<p>$line</p>"; ?>

    <h4>[Chorus]</h4>
    <?php foreach ($chorus1 as $line) echo "<p>$line</p>"; ?>

    <h4>[Post-Chorus]</h4>
    <?php foreach ($postchorus1 as $line) echo "<p>$line</p>"; ?>

    <h4>[Verse 2]</h4>
    <?php foreach ($verse2 as $line) echo "<p>$line</p>"; ?>

    <h4>[Pre-Chorus]</h4>
    <?php foreach ($prechorus2 as $line) echo "<p>$line</p>"; ?>

    <h4>[Chorus]</h4>
    <?php foreach ($chorus2 as $line) echo "<p>$line</p>"; ?>

    <h4>[Post-Chorus]</h4>
    <?php foreach ($postchorus2 as $line) echo "<p>$line</p>"; ?>

    <h1>⊹₊⟡⋆♪‧₊˚˙⋆✮. ݁₊ ⊹ . ݁ ⟡ ݁ . ⊹ ₊ ݁.✮⋆˙˚₊‧♪ᯓ★ˎˊ˗</h1>
    <p>Total Sections: </p>
    <ul>
        <li><?php echo $totalsections ;?></li>
    </ul>

    <p>Most repeated word:</p>
    <ul>
        <li><?php echo $verbs[2]; ?></li>
    </ul>

    <p>Repeats:</p>
    <ul>
        <li><?php echo $totalDanceRepeats; ?></li>
    </ul>
</body>
</html>