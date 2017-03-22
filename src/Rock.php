<?php
    class Rock
    {
      
        function playGame($player_1_choice, $player_2_choice)
        {
            if (($player_1_choice == "rock") && ($player_2_choice == "scissors")) {
              return "Player 1 is the winner!";
            } elseif (($player_1_choice == "scissors") && ($player_2_choice == "rock")) {
              return "Player 2 is the winner!";
            }
            elseif (($player_1_choice == "scissors") && ($player_2_choice == "paper")) {
              return "Player 1 is the winner!";
            } elseif (($player_1_choice == "paper") && ($player_2_choice == "scissors")) {
              return "Player 2 is the winner!";
            }
            elseif (($player_1_choice == "paper") && ($player_2_choice == "rock")) {
              return "Player 1 is the winner!";
            } elseif (($player_1_choice == "rock") && ($player_2_choice == "paper")) {
              return "Player 2 is the winner!";
            } elseif (($player_1_choice == $player_2_choice)) {
              return "It's a tie!";
            }
        }
    }





?>
