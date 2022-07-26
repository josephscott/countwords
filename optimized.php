<?php
# simple fastest time was 2.073s run directly
# time php simple.php < kjvbible_x10.txt

// 1.84 seconds
$words = [];
while (($line = fgets(STDIN)) !== false) {
	foreach ( explode( ' ', strtolower( trim( $line ) ) ) as $word ) {
		if ( empty( $word ) ) {
			continue;
		}

        if (!isset($words[$word])) {
            $words[$word] = 0;
        }
        $words[$word]++;
    }
}

arsort($words);

foreach($words as $word => $count) {
    echo "$word $count\n";
}
