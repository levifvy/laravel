@extends('layouts.plantilla')

@section('title','Teams fixtures2')

@section('content')
<?php 

// Function to assign fixtures to teams of same category with minimum matches
function assignFixtures($category, $start_time, $end_time) {
  // Get teams of given category
  $teamsQuery = "SELECT * FROM teams WHERE category='$category'";
  $teamsResult = $conn->query($teamsQuery);
  $teams = array();
  if ($teamsResult->num_rows > 0) {
    while($row = $teamsResult->fetch_assoc()) {
      array_push($teams, $row);
    }
  } else {
    echo "No teams found in the given category.";
    return;
  }

  // Calculate minimum matches required for each team
  $numTeams = count($teams);
  $matchesPerTeam = floor(($numTeams - 1) / 2);
  $totalMatches = $numTeams * $matchesPerTeam;

  // Generate fixtures
  $fixtures = array();
  $counter = 0;
  for ($i = 0; $i < $numTeams - 1; $i++) {
    for ($j = $i + 1; $j < $numTeams; $j++) {
      $counter++;
      $team1 = $teams[$i]['id'];
      $team2 = $teams[$j]['id'];
      $start_time = rand($start_time, $end_time);
      $fixturesQuery = "INSERT INTO fixtures (team1_id, team2_id, start_time) VALUES ('$team1', '$team2', '$start_time')";
      if ($conn->query($fixturesQuery) === TRUE) {
        echo "Fixture $counter assigned successfully.<br>";
      } else {
        echo "Error assigning fixture: " . $conn->error;
      }
    }
  }
}

// Form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $fixture_id = $_POST['fixture_id'];
  $team1_id = $_POST['team1_id'];
  $team2_id = $_POST['team2_id'];
  $goals = $_POST['goals'];
  $fouls_commited = $_POST['fouls_commited'];
  $fouls_received = $_POST['fouls_received'];
  $red_cards = $_POST['red_cards'];
  $yellow_cards = $_POST['yellow_cards'];
}

  // Update teams with match results
  $team1Query = "SELECT * FROM teams WHERE id='$team1_id'";
  $team1Result = $conn->query($team1Query);
  $team1 = $team1Result->fetch_assoc();
  $team2Query = "SELECT * FROM teams WHERE id='$team2_id'";
  $team2Result = $conn->query($team2Query);
  $team2 = $team2Result->fetch_assoc();

  // Calculate score updates
  $team1Score = $team1['score'];
  $team2Score = $team2['score'];
  if ($goals > 0) {
    $team1Score += $goals * 3;
  }
  if ($fouls_commited > 0) {
    $team1Score -= $fouls_commited;
  }
  if ($fouls_received > 0) {
    $team1Score -= $fouls_received;
  }
  if ($red_cards > 0) {
$team1Score -= $red_cards * 4;
}
if ($yellow_cards > 0) {
$team1Score -= $yellow_cards * 2;
}

// Update team scores and match information in database
$team1ScoreQuery = "UPDATE teams SET goals=goals+$goals, fouls_commited=fouls_commited+$fouls_commited, fouls_received=fouls_received+$fouls_received, red_cards=red_cards+$red_cards, yellow_cards=yellow_cards+$yellow_cards, score=$team1Score WHERE id='$team1_id'";
$conn->query($team1ScoreQuery);
$team2ScoreQuery = "UPDATE teams SET goals=goals+$goals, fouls_commited=fouls_commited+$fouls_commited, fouls_received=fouls_received+$fouls_received, red_cards=red_cards+$red_cards, yellow_cards=yellow_cards+$yellow_cards, score=$team2Score WHERE id='$team2_id'";
$conn->query($team2ScoreQuery);
$matchResultQuery = "INSERT INTO match_results (fixture_id, team1_id, team2_id, goals, fouls_commited, fouls_received, red_cards, yellow_cards) VALUES ('$fixture_id', '$team1_id', '$team2_id', '$goals', '$fouls_commited', '$fouls_received', '$red_cards', '$yellow_cards')";
$conn->query($matchResultQuery);

// Determine winner and show alert
if ($goals > 0) {
  if($goals > $team2['goals']) {
    echo '<script>alert("' . $team1['name'] . ' wins!")</script>';
  } elseif ($goals < $team2['goals']) {
    echo '<script>alert("' . $team2['name'] . ' wins!")</script>';
  } elseif ($team1['goals'] == $team2['goals']) {
    echo '<script>alert("It\'s a tie!")</script>';
  } else {
    echo '<script>alert("No goals were scored.")</script>';
  }
}
        


  // Check if form is submitted and process data
if(isset($_POST['submit'])){

// Get form data
$fixture_id = $_POST['fixture_id'];
$team1_score = $_POST['team1_score'];
$team1_fouls_commited = $_POST['team1_fouls_commited'];
$team1_fouls_received = $_POST['team1_fouls_received'];
$team1_red_cards = $_POST['team1_red_cards'];
$team1_yellow_cards = $_POST['team1_yellow_cards'];
$team2_score = $_POST['team2_score'];
$team2_fouls_commited = $_POST['team2_fouls_commited'];
$team2_fouls_received = $_POST['team2_fouls_received'];
$team2_red_cards = $_POST['team2_red_cards'];
$team2_yellow_cards = $_POST['team2_yellow_cards'];

// Get fixture data
$fixture = Fixture::find($fixture_id);

// Get team data
$team1 = Team::find($fixture->team1_id);
$team2 = Team::find($fixture->team2_id);

// Calculate scores for team1
if($team1_score > $team2_score){
$team1->score += 10; // Add 10 points for winning
}
elseif($team1_score < $team2_score){
$team1->score -= 10; // Subtract 10 points for losing
}
else{
// Draw, no points added or subtracted
}

// Add 3 points for each goal
$team1->score += 3 * $team1_score;

// Subtract 1 point for each foul commited
$team1->score -= $team1_fouls_commited;

// Add 2 points for each yellow card
$team1->score -= 2 * $team1_yellow_cards;

// Subtract 4 points for each red card
$team1->score -= 4 * $team1_red_cards;

// Calculate scores for team2 (similar to team1)
if($team2_score > $team1_score){
$team2->score += 10;
}
elseif($team2_score < $team1_score){
$team2->score -= 10;
}
else{
// Draw
}

$team2->score += 3 * $team2_score;

$team2->score -= $team2_fouls_commited;

$team2->score -= 2 * $team2_yellow_cards;

$team2->score -= 4 * $team2_red_cards;

// Save team data
$team1->save();
$team2->save();

// Show alert with winner of the match
if($team1_score > $team2_score){
echo "<script>alert('" . $team1->name . " wins!');</script>";
}
elseif($team1_score < $team2_score){
echo "<script>alert('" . $team2->name . " wins!');</script>";
}
else{
echo "<script>alert('It's a draw!');</script>";
}
}

?>
@endsection