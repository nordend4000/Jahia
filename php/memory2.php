<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Le site de Jahia : Jeux de mémoire</title>
    <link rel="stylesheet" href="memory2.css">
</head>
<body>
    <header>
        
        <div style="text-align: left">
        <h2><img src="images/push.png" alt="push decoration" width="5%">     Jeux de memoire</h2></div>
         <div style="text-align: center">
         <img src="images/line.png" alt="line decoration" width="90%" style="text-align: center;"><br> 
         </div> 
            <h4> Cliques sur les cartes pour trouver les paires</h4>
        <span class="tool-tip">
            <button aria-label="how to play" onClick="openHelpModal()">
                <svg width="40" height="40">
                    <circle cx="20" cy="20" r="15" stroke-width="2" fill="#000000" />
                    <text x="50%" y="50%" text-anchor="middle" fill="white" font-size="1em" dy=".4em">❓</text>
                    ❓
                </svg>
            </button>
            <span class="tool-tip-text">Comment Jouer</span>
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
                <button class="restart-button brown-button" id="restartButton" onClick="startGame()">Re-jouer ↻</button>
            </div>
        </section>
        
        <!--Modal on game over -->
        <div class="modal" id="gameOverModal">
            <div class="modal-content">
                <span aria-label="close" role="button" class="close" id="closeModal">&times;</span>
                <div class="modal-header">
                    <h4>La partie est terminée.</h4>
                </div>
                <div class="modal-body">
                    <div class="message">
                        <p>Bravo! <span class="game-over-icons">🎊 🎊 🎊</span> Joli score !! <span class="game-over-icons" style="animation-delay: 0.2s">🎉 🎉 🎉</span></p>
                        <p>Tu a terminer la partie avec <span id="totalGameMoves"></span> essais
                            <br>en <span id="totalGameTime"></span>
                        </p>
                        <p>Ta note est : <span id="finalStarRating"></span></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="brown-button" onClick="playAgain()">Re-jouer &nbsp;😀</button>
                </div>
            </div>
        </div>

        <!-- Modal to display Game Instructions -->
        <div class="modal" id="helpModal">
            <div class="modal-content">
                <span aria-label="close" role="button" class="close" onClick="closeHelpModal()">&times;</span>
                <div class="modal-header">
                    <h4>Comment jouer ?</h4>
                </div>
                <div class="modal-body">
                    <div class="help-tips">
                        <p>Ce jeux de mémoire va tester votre capacité a retenir des informations visuelles</p>
                        <p>Ce jeux consiste a:</p>
                        <ul>
                            <li>&diams; Un plateau de 16 cartes soit 8 paires </li>
                            <li>&diams; Un systeme de note :
                                <ul>
                                    <li>&diamond; Un compteur d'essai.</li>
                                    <li>&diamond; Une horloge pour mesurer le temps ecoulé.</li>
                                    <li>&diamond; Le nombre d'étoile représente la note qui est basé sur le nombre d'essais réalisés pour finir la partie.</li>
                                    <li>&diamond; Un bouton pour ré-essayer.</li>
                                </ul>
                            </li>
                            <li>&diams; Un bouton pour ré-essayer plus grand </li>
                        </ul>
                        <p>Quand la page est chargé le jeux commence.</p>
                        <p>Les 8 paires de carte sont cachées</p>
                        <p>Comment jouer:</p>
                        <ul>
                            <li>&bullet; Cliques sur une carte pour voir la photo</li>
                            <li>&bullet; Cliques sur une autre carte pour voir la photo
                                <ul>
                                    <li>a. Si les deux cartes sont identiques, elles restent affichées</li>
                                    <li>b. Si les deux carte sont differentes alors il faut réessayer jusqu'a cliquer sur une paire.</li>
                                </ul>
                            </li>
                            <li>&bullet; Tu peus cliquer sur le bouton ré-essayer <em>↻</em> or <em>Re-jouer ↻</em> a n'importe quel moment pour recommencer.</li>
                            <li>&bullet; Losque tu auras trouvé les 8 paires correspondantes, la partie ce termine. Le temps de la partie, le nombre d'essai effectué ainsi que votre note seront alors affiché.</li>
                            <li>&bullet; Tu peux cliquer sur  <em>Re-jouer</em> dans la fenetre qui s'affiche.</li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="brown-button" onClick="closeHelpModal()">Fermer</button>
                </div>
            </div>
        </div>
        <div class="page-footer">
            <h6><a href="jahia_jeux.php">Retour aux Jeux</a></h6><br></div>
    </main>
        
            
    <script src="memory2.js"></script>
    <noscript>Oooops!!! Desolé mais tu ne peux pas jouer à ce jeux, tu n'as pas activé Javascript dans ton Navigateur.</noscript>
</body>
<?php include("footer.php"); ?>
</html>