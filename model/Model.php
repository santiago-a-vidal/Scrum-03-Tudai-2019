<?php 
    class Model
    {
        protected $db;
        function __construct()
        {
            try
            {
                $this->db = new PDO('mysql:host=localhost;'.'dbname=apptrash;charset=utf8', 'root', '');
            }
            catch (PDOException $e)
            {
                buildDDBBfromFile('apptrash', 'database/apptrash.sql');
            }
        }
    }

    //Funciones para la autocarga de la base de datos desde el archivo .sql (para el caso de no existir la bd en phpmyadmin)

    function buildDDBBfromFile($dbname, $dbfile)
    {
   	    try
        {
         	$connection = new PDO('mysql:host=localhost', 'root', '');
         	$connection->exec('CREATE DATABASE IF NOT EXISTS '.$dbname);
         	$connection->exec('USE '. $dbname);
         	$queries = loadSQLSchema($dbfile);
         	$connection->exec($queries);
		}
		catch (PDOException $e)
        {
     		echo $e;
   	    }
 	}
    function loadSQLSchema($dbfile)
    {
        $file = fopen($dbfile, "r");
        $getTablas = "";
        while(!feof($file))
        {
            $getTablas .= fgets($file);
        }
		fclose($file);
     	return $getTablas;
   	}
 ?>
