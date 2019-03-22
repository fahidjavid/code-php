<?php
function set_count( $file_name = 'counter.txt' ) {
	if ( file_exists( $file_name ) ) {
		// read the value
		$handle = fopen( $file_name, 'r' );

		// increment it by one
		$count = (int) fread( $handle, 20 ) + 1;

		// write the new value
		$handle = fopen( $file_name, 'w' );

		fwrite( $handle, $count );
		fclose( $handle );

		return $count;

	} else {
		// create it
		$handle = fopen( $file_name, 'w+' );
		$count  = 1;

		// set a default value of 1
		fwrite( $handle, $count );
		fclose( $handle );

		return $count;
	}
}

echo set_count();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

</body>
</html>