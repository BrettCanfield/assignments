<?php

$reels = ["A", "B", "C"];
$total = 0;
$spinCount = 0;
$results = [];

while ($total < 500 && $spinCount < 20){
    $spinCount ++;

    $spin = "";
    for ($i = 0; $i < 3; $i ++) {
        $spin .= $reels[array_rand($reels)];
    };

    $counts = array_count_values(str_split(($spin)));

    $payout = match (true) {
        in_array(3, $counts) => 100,
        in_array(2, $counts) => 50,
        default => 0
    };

    $total = $total + $payout;
    $results[] = "$spin Payoff $payout";

};

foreach ($results as $result) {
    echo $result . PHP_EOL;
};

echo "Total Winnings: $total" . PHP_EOL;