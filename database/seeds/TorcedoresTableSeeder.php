<?php

use Illuminate\Database\Seeder;

class TorcedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $xml = simplexml_load_file(realpath('xml'. DIRECTORY_SEPARATOR . 'clientes.xml') );
        
        $p_cnt = count($xml->torcedor);
        for ($i = 0; $i < $p_cnt; $i++) {
            $param = $xml->torcedor[$i];
            
            DB::table('torcedores')->insert([
                'nome' => $param['nome'],
                'documento' => $param['documento'],
                'cep' => $param['cep'],
                'endereco' => $param['endereco'],
                'bairro' => $param['bairro'],
                'cidade' => $param['cidade'],
                'uf' => $param['uf'],
                'telefone' => $param['telefone'],
                'email' => $param['email'],
                'ativo' => $param['ativo']
            ]);
        }
        
        
    }
}
