<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css?v=<?= filemtime('styles.css') ?>" />
    <script src="script.js"></script>
    <meta charset="UTF-8" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <title>Training</title>
</head>
<body>
     <nav id="navbar">
        <div class="logo"> SEND IT </div>
        <ul class="nav-links">
            <li><a href="home.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="train.php">Training</a></li>
            <li><a href="rank.php">Ranked</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </nav>
    <br>
    <br>
    <br>
    <br>


    <div>
        <h1 style="text-align: center;">Training Hub</h1>
        <p>Welcome to the training hub! Here you can find resources and exercises to improve your skills.</p>
    </div>  

    <div class="training-container">
        <div class="strength-training">
            <div class="train-title">
            <h2>Strength Training</h2>
            </div>
                <p> Strength training is an important part of climbing. It can help you climb harder routes and prevent injury.
                Below are some exercises that can help you build strength for climbing. </p>
            
                <div class="strength-exercises">
                    <h4> Strength Training Exercises </h4>
                </div> 
                <ul>
                    <li> Pull-ups </li>
                    <p> helps building upper body / pull strength </p>
                    <li> Front Levers </li>
                    <p> Helps build core strength and finger strength </p>
                    <li> Hanging Led Raises </li>
                    <p> Helps build core strength </p>
                    <li> Hanging L sits </li>
                    <p> Helps build core strength </p>
                    <li> Overhead Press</li>
                    <p> Helps build shoulder strength </p>
                    <li> Pistol Squats</li>
                    <p> Helps build leg strength </p>
                    <li> Hangboard Training </li>
                    <p> Helps build finger strength </p>
                    <li> Spray Wall Training </li>
                    <p> Helps build power and technique </p>
                    <h2> Helpful Articles </h2>
                </ul>
                <ul>
                            <li><a href="https://www.climbfit.com.au/our-top-ten-strength-training-and-bouldering-tips-for-beginners/">Tips for beginners</a></li>
                            <li><a href="https://www.climbstrong.com/resource-posts/boulder-strength-skill-sessions"> Strength Training Plan</a></li>
                </ul>

        </div> 

        <div class="fingerboard-training">
            <div class ="train-title">
            <h2>Hangboard Training</h2>
            </div>
            <h4> Hangboards can help develop your finger strength and is an extremely useful tool </p>
            <p> Hangboards can come in many different shapes and sizes. Some are made of wood and some are made of plastic. 
                they can have all different types of holds or edges. Below are some examples </p>
                <img src="photos/Beastmaker_hangboard.png" alt="Beastmaker Hangboard" width='300' height='150'>
                <img src="photos/Plastic_handboard.png" alt="Metolius Hangboard " width='300' height='150'>
            <p> First step in hand boarding is technique to ensure we are preventing injury </p>
                <div class="tech-injury">
                <h4> Injury Prevention </h4>
                </div>
                <ol>
                    <li> Do Not Full Crimp </li>
                    <p> Full crimping can put excess stress on your fingers, You should hang board with half crimp or open hand grip </p> 
                    <li> Warm Up </li>
                    <p> Warm ups should be around 10-15 minutes long. Focus on stretching, easy strenth movements, and cardio </p>
                    <li> Warm Down </li>
                    <p> Slowly easy your self out of the hangboard session, do a few easy climbs and light cardio.
                        This will prevent from blood pooling into your fingers and hands. </p>
                </ol>
                    <div class="tech-injury">
                    <h4> Types of Grip </h4>
                    </div>
                    <ul>
                        <li> Jug </li>
                        <li> Sloper </li>
                        <li> Crimp </li>
                        <li> Pinch </li>
                        <li> 3-finger pocket </li>
                        <li> 2-finger pocket </li>
                        <li> wide pinch </li>
                        <li> small edge </li>
                        <li> large edge </li>
                    </ul>

                        <div class="tech-injury">
                        <h2> Helpful Articles </h2>
                        </div>
                        <ul>
                            <li><a href="https://www.trainingbeta.com/mark-and-mike-anderson-guide-to-hangboard-training"> Hangboard Training Guide</a></li>
                            <li><a href="https://www.99boulders.com/beginner-hangboard-training"> 8-Week Hangboarding Workout Plan</a></li>
                        </ul>
        </div>

        <div class="technique-training">
            <div class="train-title">
            <h2>Technique Training</h2>
            </div>
            <p> Technique training focuses on improving your movement, body positioning, 
                foot positions, and precision. Good technique can drastically improve your climbing 
                and make climbs feel easier without requiring more strength. 
            </p>
            <div class="tech">
                <h4> Techniques </h4>
                </div>
                <ol>
                    <li> Flagging</li>
                    <p> Flagging is when one foot is put out to the press on the wall. 
                        This helps you maintain balance and can help with bringing your hips to the wall.  </p> 
                    <li> Rock Over </li>
                    <p>  A rock over is when you pull the weight of your body over your foot. 
                        You want to make sure you are not moving up, but moving your body to be center over your foot.
                    </p>
                    <li> Drop Knee </li>
                    <p> A drop knee is when you have your foot on a hold and you twist your knee down and inwards.
                        This helps give your corrisponding arm more reach. 
                    </p>
                    <li> Cross Through </li>
                    <p> This is when you reach your arm across your body to be able to reach another hold. </p>
                    <li> Match </li>
                    <p> A match is when you have your hand on a hold and your bring your other hand to that same hold. 
                        you are matching a signual hold with both hands. </p>
                    <li>Heel Hook </li>
                    <p> A heek hook helps you gain more tension on the wall and can act as and extra arm. To perform the heel hook 
                        you want to angle your toes downward and away from the wall. Your foot lays side ways against the hold.
                    </p>
                    <li> Toe Hook </li>
                    <p> The toe hook is when you place the top of your shoe into a hold and flex your ankles towards the hold. 
                        This helps you gain more balance on the wall depending on the climb you are working on. 
                    </p>
                    <li> Mantle </li>
                    <p> A mantle is when you go from underneath and hold and get on top of it. This can require a lot of strenght 
                        and is performed simular to a muscle up. 
                    </p>
                    <li> Dyno </li>
                    <p> A dyno is when you cannot reach a hold so you have tp swing and jump to it. 
                        it is short for dynamic. 
                    </p>
                    <li> Deadpoint </li>
                    <p> A deadpoint is when the hold you are aiming for is a slit or a pocket and you need to be extremely precise. 
                    </p>

                </ol>

                <h2> Helpful Articles </h2>
                <ul> 
                    <li><a href="https://www.99boulders.com/climbing-moves-holds-and-technique"> Technique information </a></li>



        </div>
    </div>

      <footer>
        <p>© 2026 Send It. All rights reserved.</p>
    </footer>
        
</body>
</html>