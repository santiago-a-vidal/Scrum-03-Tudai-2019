<?php
	class ConfigApp
    {
    	public static $ACTION = 'action';
    	public static $PARAMS = 'params';
    	public static $ACTIONS =
      [
        '' => 'WebController#index',
        'index' => 'WebController#index',
        'admin' => 'WebController#admin',
        'user' => 'WebController#index',
        'detalleReporte' => 'WebController#detalleReporte',
				'guardarDenuncia' => 'WebController#guardarDenuncia',
        'guardarArchivo' => 'WebController#guardarArchivo',
        'guardarReporte' => 'WebController#guardarReporte',
      ];
	}
?>
