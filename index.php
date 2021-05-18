<?php

	private function envioSMS()
    {
        $url = 'https://sms.maxx.mobi/ws/maxxmobi/envios/';
        $usuario = 'root';
        $senha = 'root';

        $dados = array(
            'usuario' => $usuario,
            'senha' => $senha,
            'requisicao' => array(
                array(
                    'idCliente' => 'fev01',
                    'numero' => '5571988888888',
                    'mensagem' => 'Mensagem 01'
                ),
                array(
                    'idCliente' => 'fev02',
                    'numero' => '5571988888889',
                    'mensagem' => 'Mensagem 02'
                )
            ),
        );

        $data_string = json_encode($dados);

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string))
        );

    
        $result = curl_exec($ch);

        return json_decode($result);
    }
	
	

    private function statusSMS()
    {
        $url = 'https://sms.maxx.mobi/ws/maxxmobi/fetch/status/';
        $usuario = 'root';
        $senha = 'root';

        $dados = array(
            'usuario' => $usuario,
            'senha' => $senha,
        );
        
        $data_string = json_encode($dados);

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string))
        );

    
        $result = curl_exec($ch);

        return json_decode($result);
    }
	
	

    private function retornoSMS()
    {
        $url = 'https://sms.maxx.mobi/ws/maxxmobi/fetch/retornos/';
        $usuario = 'root';
        $senha = 'root';

        $dados = array(
            'usuario' => $usuario,
            'senha' => $senha
        );
        
        $data_string = json_encode($dados);

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string))
        );

    
        $result = curl_exec($ch);

        return json_decode($result);
    }
