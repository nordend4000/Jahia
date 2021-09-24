<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memory Matching Game</title>
    <link rel="stylesheet" href="memory2.css">
</head>
<body>
    <header>
        <div style="text-align: left">
        <h2><img src="images/push.png" alt="push decoration" width="5%">Memory Game </h2></div>
        <div style="text-align: center">
         <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"><br> 
         </div> 
            <h4> Let's find out the matching card</h4>
        <span class="tool-tip">
            <button aria-label="how to play" onClick="openHelpModal()">
                <svg width="40" height="40">
                    <circle cx="20" cy="20" r="15" stroke-width="2" fill="#000000" />
                    <text x="50%" y="50%" text-anchor="middle" fill="white" font-size="1em" dy=".4em">❓</text>
                    ❓
                </svg>
            </button>
            <span class="tool-tip-text">How to Play</span>
        </span>
    </header>
    <main>
        <section>
            <div class="game-status-details">
                <div class="rating">
                    <span class="star">🌟</span>
                    <span class="star">🌟</span>
                    <span class="star">🌟</span>
                    <span class="star">🌟</span>
                    <span class="star">🌟</span>
                </div>
                <span class="move-counter" id="moveCounter"></span>
                <span class="timer" id="timer">0 mins 0 secs</span>
                <button class="restart-btn" id="restartBtn" onClick="startGame()" aria-label="restart game">↻</button>
            </div>
            <table class="game-board">
                <tbody class="game-grid">
                    <tr class="game-grid-row">
                        <td class="game-card">
                            <img class="game-card-img" src="img/1.jpg" alt="cake1">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="img/2.jpg" alt="cake2">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="img/3.jpg" alt="cake3">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="img/4.jpg" alt="cake4">
                        </td>
                    </tr>
                    <tr class="game-grid-row">
                        <td class="game-card">
                            <img class="game-card-img" src="img/5.jpg" alt="cake5">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="img/6.jpg" alt="cake6">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="img/7.jpg" alt="cake7">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="img/8.jpg" alt="cake8">
                        </td>
                    </tr>
                    <tr class="game-grid-row">
                        <td class="game-card">
                            <img class="game-card-img" src="img/1.jpg" alt="cake1">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="img/2.jpg" alt="cake2">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="img/3.jpg" alt="cake3">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="img/4.jpg" alt="cake4">
                        </td>
                    </tr>
                    <tr class="game-grid-row">
                        <td class="game-card">
                            <img class="game-card-img" src="img/5.jpg" alt="cake5">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="img/6.jpg" alt="cake6">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="img/7.jpg" alt="cake7">
                        </td>
                        <td class="game-card">
                            <img class="game-card-img" src="img/8.jpg" alt="cake8">
                        </td>
                    </tr>
                </tbody>               
            </table>
            <div class="restart-button-div">
                <button class="restart-button brown-button" id="restartButton" onClick="startGame()">Restart ↻</button>
            </div>
        </section>
        
        <!--Modal on game over -->
        <div class="modal" id="gameOverModal">
            <div class="modal-content">
                <span aria-label="close" role="button" class="close" id="closeModal">&times;</span>
                <div class="modal-header">
                    <h4>Game Over</h4>
                </div>
                <div class="modal-body">
                    <div class="message">
                        <p>Congratulations! <span class="game-over-icons">🎊 🎊 🎊</span> You successfully completed the game. <span class="game-over-icons" style="animation-delay: 0.2s">🎉 🎉 🎉</span></p>
                        <p>You completed the game using <span id="totalGameMoves"></span> moves
                            <br>in <span id="totalGameTime"></span>
                        </p>
                        <p>Your rating is: <span id="finalStarRating"></span></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="brown-button" onClick="playAgain()">Play Again &nbsp;😀</button>
                </div>
            </div>
        </div>

        <!-- Modal to display Game Instructions -->
        <div class="modal" id="helpModal">
            <div class="modal-content">
                <span aria-label="close" role="button" class="close" onClick="closeHelpModal()">&times;</span>
                <div class="modal-header">
                    <h4>How to Play</h4>
                </div>
                <div class="modal-body">
                    <div class="help-tips">
                        <p>This is a Matching Game used to test your memory retention abilities</p>
                        <p>The game consists of:</p>
                        <ul>
                            <li>&diams; A game board with 16 cards - 8 matching pairs of cards</li>
                            <li>&diams; A game status indicator which consists of :
                                <ul>
                                    <li>&diamond; A rating indicator - A list of stars which indicates your rating based on the number of your moves.</li>
                                    <li>&diamond; A move counter - Indicates the number of moves you've made.</li>
                                    <li>&diamond; A timer - Indicates the total number of time you take to match all cards.</li>
                                    <li>&diamond; A restart button.</li>
                                </ul>
                            </li>
                            <li>&diams; A larger restart button.</li>
                        </ul>
                        <p>When the page loads the game starts.</p>
                        <p>All the 8 pairs of cards i.e 16 cards are flashed</p>
                        <p>How to play:</p>
                        <ul>
                            <li>&bullet; Click on a black square to reveal the card</li>
                            <li>&bullet; Click on a second black square to reveal the card
                                <ul>
                                    <li>a. If the two cards match, the cards stay revealed.</li>
                                    <li>b. If there is no match, the cards are hidden and you can click another pair.</li>
                                </ul>
                            </li>
                            <li>&bullet; You can click either of the restart buttons <em>↻</em> or <em>Restart ↻</em> at any point in time to start all over.</li>
                            <li>&bullet; When you have correctly matched all 8 pairs of cards, the game ends and your total game time, total number of moves and rating will be displayed.</li>
                            <li>&bullet; You can click the <em>Play Again</em> in the modal that pops up to start a new game.</li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="brown-button" onClick="closeHelpModal()">Close</button>
                </div>
            </div>
        </div>
        <div class="page-footer">
            <h6><a href="jahia_jeux_en.php">Back to Games</a></h6><br></div>
    </main>
    <script src="memory2.js"></script>
    <noscript>Oops!!! Sorry, you cannot play this game. Your broswer does not support Javascript.</noscript>
</body>
<?php include("footer.php"); ?>
</html>