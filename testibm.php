<?php

$database = "BLUDB";        # Get these database details from
$hostname = "dashdb-txn-sbox-yp-lon02-01.services.eu-gb.bluemix.net";  # the web console
$user     = "wdl34032";   #
$password = "18svpw6cg1^j5fjn";   #
$port     = 50000;          #
$ssl_port = 50001;          #

# Build the connection string
#
$driver  = "DRIVER={IBM DB2 ODBC DRIVER};";
$dsn     = "DATABASE=$database; " .
           "HOSTNAME=$hostname;" .
           "PORT=$port; " .
           "PROTOCOL=TCPIP; " .
           "UID=$user;" .
           "PWD=$password;";
$ssl_dsn = "DATABASE=$database; " .
           "HOSTNAME=$hostname;" .
           "PORT=$ssl_port; " .
           "PROTOCOL=TCPIP; " .
           "UID=$user;" .
           "PWD=$password;" .
           "SECURITY=SSL;";
$conn_string = $driver . $dsn;     # Non-SSL
$conn_string = $driver . $ssl_dsn; # SSL

# Connect
#
$conn = odbc_connect( $conn_string, "", "" );
if( $conn )
{
    echo "Connection succeeded.";

    # Disconnect
    #
    odbc_close( $conn );
}
else
{
    echo "Connection failed.";
}
?>