<?php

function acmeConnect() {
          $server = 'localhost';

          if (stripos($_SERVER["HTTP_HOST"], 'localhost') === 0
              || stripos($_SERVER["HTTP_HOST"], '127.0.0.1') === 0) {
            // Running on local server
            $dbname= 'acme';
            $username = 'iClient';
            $password = '2RGNIMpIOVm0KkE6';
          } else {
            // Running on remote server
            $dbname= 'mat18013_acme'; // [BYU-I username]_acme
            $username = 'mat18013_iClient'; // [BYU-I username]_iClient
            $password = 'mat18013_Pwd'; // [BYU-I username]_Pwd
          }

          $dsn = "mysql:host=$server;dbname=$dbname";
          $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

          // Create the actual connection object and assign it to a variable
          try {
            $acmeLink = new PDO($dsn, $username, $password, $options);
            return $acmeLink;
          } catch(PDOException $e) {
            header('Location: /mat18013-acme/view/500.php');
            exit;
          }
        }

    acmeConnect();
