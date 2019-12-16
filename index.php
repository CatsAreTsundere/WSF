<!doctype php>
<html>
<head>
<title>Granblue Fantasy</title>
</head>
<body bgcolor="c9e9f6">
<h1>A page about a browser game I really like</h1>

<p>Choose what gender you indentify the most with: 
    <form>
        <select id="gender" onchange="charaname()"> <!--Choosing gender to add some text into the html-->
                <option selected>Select</option>
                <option value="Gran">Male</option> 
                <option value="Djeeta">Female</option>
        </select>
        
    </form>
</p>
<p><a href="https://en.wikipedia.org/wiki/Granblue_Fantasy">GranblueFantasy</a> is a really fun game that is heavily inspired by Square Enix</p>
<p>I really enjoy the story, it revolves around the sky. There are continent islands that are floating over clouds and no one knows what lies beneath them.</p>
<!-- simple script to change name depending on the selected gender -->
<script> 
    function charaname() {
        var x = document.getElementById("gender").value;
        document.getElementById("named").innerHTML = "Our main character is named " + x + ". You take charge of the decisions the main character does (although everything is scripted and the decisions don't matter at all)."; //Changes name depening on the gender chosen by 
        } 
</script>

<p>You live on the Port Breeze Archipelago. And you live a fairly normal life.</p>
<p id="named"></p><p>You are followed a little dragon called Vyrn (be careful not to call him a lizard). He's been your companion for as long as you can remember. You don't have any family living with you and you're pretty independant.</p>
<p>All you have left to remember your family is a map of the skydom that was left behind by your father. He was a great skyfarer(a sort of adventurer) as far as you can remember.</p>
<img src="images/vyrnapple.gif "> <!--Image brough up through a sub directory-->
<p>Do you think hes a dragon or a lizard?</p>

<button type="button" onclick="alert('HE IS NOT A LIZARD!!!">Lizard</button><button type="button" onclick="alert('He is most definitely a fully fledge dragon')">Dragon</button>



<!--<script>
    function vyrnpic(){
    var v = document.getElementById("lod").value;
    if( v === "lizard" )
    {
        document.getElementById("vyrn").innerHTML = "He is not a lizard."
    }
    else if ( v === "dragon" )
    {
        document.getElementById("vyrn").innerHTML = "He is indeed a dragon"
    }
    }
</script>-->
<p id="Vyrn"></p>
<p><img src="images/LyriaKatalina.png" width="240" height="200" style="float: left" title="Lyria(left) being protected by Katalina(right)">  Another very important sidekick is Lyria. A sky blue haired girl. She wears a white dress and has a gold necklace with big gem in the middle. You meet her for the first time running away from Imperial Knights. You try and save her, but after accident (and summoning Bahamut to help you in your fight) you end up Life Linked to her. Meaning your that if either of you die, the other one dies with them. </p>
<p> You also meet Katalina, Lyria's guard and older sister figure. She explains to you that Lyria was an experiment created to summon "Primal Beings" such as Bahamut to be used during war.</p>
<p>As you play, there will be many characters joining your adventures. Either by story or by <a href="https://en.wikipedia.org/wiki/Gacha_game">gacha</a> means(basicly gambling for characters with ingame currency)</p>
<p>Characters range from big buff cow horned dudes to small elf eared beings. Male or female. Even some Primals that Lyria could summon.</p>
<p>You'll encounter many primal beings you'll need to fight. Many people you need to help.</p>

<p>What rpg games do you have experience in?</p>
<form action="/gn.php">
    <input name="gamename" type="text">
    <br><br>
    <input type="submit">
</form>

<p>No matter what the rpg is, you migh find a similar </p>
<p>The gameplay is like a standard turnbased RPG ala Final Fantasy. You have 4 Fighters (one slot reserved for the main character). Each characters have a set of skill that allow them to do their assigned roll.</p>
<p>The game functions on raids. You can have up to 30 teams. Each dealing damage to the single to up to 3 enemies. Team up with other to beat high level </p>
<p>Like any other mobile game, there are tones of eventsthat have their own stories and raids. In my opinion, the best events are the What Makes the Sky Blue event. The story is great. It explained the story of Sandalphon and the other Primarchs (high level angels) in this universe. <strike>Although it was suposed to be a Lyria event.</strike></p>
<p>The WMTSB trilogy explained alot about character we got in the gacha pool but knew nothing about. And the Primarch we fought. But never got an explaination as to why.</p>

<p>How was my real quick explanation of the game?</p>

<!-- form factor for adding a comment -->
<form name="commenting" action="comment.php" method="POST">
    <br>Username</br>
    <textarea name="name" rows="1" cols="10"></textarea>
    <br>Games you've played</br>
    <textarea name="game"   rows="2" cols="30"></textarea>
    <br>Comment</br>
    <textarea name="message" rows="5" cols="30"></textarea>    
    <br>
    <input type="submit">
</form>

<h2>
    Thanks for reading! <img src="images/LyriaRead.gif" width="100" height="100">
</h2>
<p>If you want to see my other hobby click <a href="site2.html">here</a>!</p>
</body>
</html>