<?php
    require_once "src/Rock.php";

    class RockTest extends PHPUnit_Framework_TestCase
    {

        function test_rock_scissors()
        {
            //Arrange
            $test_Rock = new Rock;
            $player_1_choice = "rock";
            $player_2_choice = "scissors";

            //Act
            $result = $test_Rock->playGame($player_1_choice, $player_2_choice);

            //Assert
            $this->assertEquals("Player 1 is the winner!", $result);
        }

        function test_scissors_rock()
        {
            //Arrange
            $test_Rock = new Rock;
            $player_1_choice = "scissors";
            $player_2_choice = "rock";

            //Act
            $result = $test_Rock->playGame($player_1_choice, $player_2_choice);

            //Assert
            $this->assertEquals("Player 2 is the winner!", $result);
        }
        function test_scissors_paper()
        {
            //Arrange
            $test_Rock = new Rock;
            $player_1_choice = "scissors";
            $player_2_choice = "paper";

            //Act
            $result = $test_Rock->playGame($player_1_choice, $player_2_choice);

            //Assert
            $this->assertEquals("Player 1 is the winner!", $result);
        }
        function test_paper_scissors()
        {
            //Arrange
            $test_Rock = new Rock;
            $player_1_choice = "paper";
            $player_2_choice = "scissors";

            //Act
            $result = $test_Rock->playGame($player_1_choice, $player_2_choice);

            //Assert
            $this->assertEquals("Player 2 is the winner!", $result);
        }
        function test_paper_rock()
        {
            //Arrange
            $test_Rock = new Rock;
            $player_1_choice = "paper";
            $player_2_choice = "rock";

            //Act
            $result = $test_Rock->playGame($player_1_choice, $player_2_choice);

            //Assert
            $this->assertEquals("Player 1 is the winner!", $result);
        }
        function test_rock_paper()
        {
            //Arrange
            $test_Rock = new Rock;
            $player_1_choice = "rock";
            $player_2_choice = "paper";

            //Act
            $result = $test_Rock->playGame($player_1_choice, $player_2_choice);

            //Assert
            $this->assertEquals("Player 2 is the winner!", $result);
        }

    }




?>
