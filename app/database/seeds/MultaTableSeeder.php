<?php

class MultaTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('multa')->delete();
                        
		Multa::create(array(
			'infracao' => 'Sinal vermelho'
                        ,'ponto' => 5
                        ,'penalidade' => 'suspensao temporaria carteira'
                        ,'valor' => 195.50
		));
                
                Multa::create(array(
			'infracao' => 'Alta Velocidade'
                        ,'ponto' => 3
                        ,'penalidade' => 'multa apenas'
                        ,'valor' => 247.65
		));
	}

}