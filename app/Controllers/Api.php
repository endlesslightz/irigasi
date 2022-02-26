<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bsa1;
use App\Models\Bsa10;
use App\Models\Bpk8;
use App\Models\Bmj1;
use App\Models\DebitBsa1;
use App\Models\DebitBsa10;
use App\Models\DebitBpk8;
use App\Models\DebitBmj1;
use Bluerhinos\phpMQTT;



class Api extends BaseController
{
    public $server = 'brg-gateway.net';     // change if necessary
    public $port = 1883;                     // change if necessary
    public $username = 'alpha';                   // set your username
    public $password = 'alpha';                   // set your password
    public $client_id = 'subscriber';

    public function index()
    {
        return 'Ya? Ada yang bisa saya bantu?';
    }

    public function service_bsa1()
    {
        $mqtt = new phpMQTT($this->server, $this->port, $this->client_id);
        if (!$mqtt->connect(true, NULL, $this->username, $this->password)) {
            exit(1);
        }
        $topics["BSa1/sensors/wlu"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa1($sensor[2], floatval($msg));
            }
        );
        $topics["BSa1/sensors/wld"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa1($sensor[2], floatval($msg));
            }
        );
        $topics["BSa1/sensors/gt1"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa1($sensor[2], floatval($msg));
            }
        );
        $topics["BSa1/sensors/gt2"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa1($sensor[2], floatval($msg));
            }
        );
        $topics["BSa1/sensors/gt3"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa1($sensor[2], floatval($msg));
            }
        );
        $topics["BSa1/sensors/gt4"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa1($sensor[2], floatval($msg));
                exit();
            }
        );
        $mqtt->subscribe($topics, 0);
        while ($mqtt->proc()) {
        }
        $mqtt->close();
    }

    public function service_bsa10()
    {
        $mqtt = new phpMQTT($this->server, $this->port, $this->client_id);
        if (!$mqtt->connect(true, NULL, $this->username, $this->password)) {
            exit(1);
        }
        $topics["BSa10/sensors/wl1"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/wl2"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/wl3"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/wl4"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/wl5"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/wl6"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt1"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt2"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt3"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt4"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt5"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt6"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt7"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt8"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt9"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
            }
        );
        $topics["BSa10/sensors/gt10"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bsa10($sensor[2], floatval($msg));
                exit();
            }
        );
        $mqtt->subscribe($topics, 0);
        while ($mqtt->proc()) {
        }
        $mqtt->close();
    }

    public function service_bpk8()
    {
        $mqtt = new phpMQTT($this->server, $this->port, $this->client_id);
        if (!$mqtt->connect(true, NULL, $this->username, $this->password)) {
            exit(1);
        }
        $topics["BPk8/sensors/wl1"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/wl2"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/wl3"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/wl4"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/wl5"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt1"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt2"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt3"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt4"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt5"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt6"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt7"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt8"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
            }
        );
        $topics["BPk8/sensors/gt9"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bpk8($sensor[2], floatval($msg));
                exit(1);
            }
        );

        $mqtt->subscribe($topics, 0);
        while ($mqtt->proc()) {
        }
        $mqtt->close();
    }

    public function service_bmj1()
    {
        $mqtt = new phpMQTT($this->server, $this->port, $this->client_id);
        if (!$mqtt->connect(true, NULL, $this->username, $this->password)) {
            exit(1);
        }
        $topics["BMj1/sensors/wlu"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bmj1($sensor[2], floatval($msg));
            }
        );
        $topics["BMj1/sensors/wld"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bmj1($sensor[2], floatval($msg));
            }
        );
        $topics["BMj1/sensors/gt1"] = array(
            'qos' => 0,
            'function' => function ($topic, $msg) {
                echo "Topic: {$topic}\n\n";
                echo "\t$msg\n\n<br>";
                $sensor = explode('/', $topic);
                $this->bmj1($sensor[2], floatval($msg));
                exit(1);
            }
        );
        $mqtt->subscribe($topics, 0);
        while ($mqtt->proc()) {
        }
        $mqtt->close();
    }

    // ====================== Insert Data ==============================
    public function bsa1($sensor, $nilai)
    {
        $model = new bsa1();
        $data = [
            'sensor' => $sensor,
            'nilai' => $nilai,
        ];
        $model->save($data);

        return print_r($data);
    }
    public function bsa10($sensor, $nilai)
    {
        $model = new bsa10();
        $data = [
            'sensor' => $sensor,
            'nilai' => $nilai,
        ];
        $model->save($data);
        return print_r($data);
    }
    public function bpk8($sensor, $nilai)
    {
        $model = new bpk8();
        $data = [
            'sensor' => $sensor,
            'nilai' => $nilai,
        ];
        $model->save($data);
        return print_r($data);
    }
    public function bmj1($sensor, $nilai)
    {
        $model = new bmj1();
        $data = [
            'sensor' => $sensor,
            'nilai' => $nilai,
        ];
        $model->save($data);
        return print_r($data);
    }

    // =========================Get Data=========================

    public function get_bsa1($sensor)
    {
        $model = new bsa1();
        $data = $model->where('sensor', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }

    public function get_bsa10($sensor)
    {
        $model = new bsa10();
        $data = $model->where('sensor', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }

    public function get_bpk8($sensor)
    {
        $model = new bpk8();
        $data = $model->where('sensor', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }

    public function get_bmj1($sensor)
    {
        $model = new bmj1();
        $data = $model->where('sensor', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }


    // ===================== Hitung Debit===========================
    public function debit_bsa1()
    {
        $model1 = new bsa1();
        $model2 = new debitbsa1();
        $data = $model1->where('sensor', 'wlu')->orderBy('created_at', 'desc')->first();
        $wlu = floatval($data['nilai']) / 100;

        $data = $model1->where('sensor', 'gt1')->orderBy('created_at', 'desc')->first();
        $gt1 = floatval($data['nilai']) / 100;
        $debit = (13.52 * $gt1 * sqrt($wlu - $gt1));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt2')->orderBy('created_at', 'desc')->first();
        $gt2 = floatval($data['nilai']) / 100;
        $debit = (13.52 * $gt2 * sqrt($wlu - $gt2));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt3')->orderBy('created_at', 'desc')->first();
        $gt3 = floatval($data['nilai']) / 100;
        $debit = (13.52 * $gt3 * sqrt($wlu - $gt3));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt4')->orderBy('created_at', 'desc')->first();
        $gt4 = floatval($data['nilai']) / 100;
        $debit = (13.52 * $gt4 * sqrt($wlu - $gt4));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);
    }


    public function debit_bsa10()
    {
        $model1 = new bsa10();
        $model2 = new debitbsa10();
        $data = $model1->where('sensor', 'wl1')->orderBy('created_at', 'desc')->first();
        $wlu = floatval($data['nilai']) / 100;

        $data = $model1->where('sensor', 'gt1')->orderBy('created_at', 'desc')->first();
        $gt1 = floatval($data['nilai']) / 100;
        $debit = (0.44 * 1.5 * $gt1 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt2')->orderBy('created_at', 'desc')->first();
        $gt2 = floatval($data['nilai']) / 100;
        $debit = (0.335 * 1.5 * $gt2 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt3')->orderBy('created_at', 'desc')->first();
        $gt3 = floatval($data['nilai']) / 100;
        $debit = (0.335 * 1.5 * $gt3 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt4')->orderBy('created_at', 'desc')->first();
        $gt4 = floatval($data['nilai']) / 100;
        $debit = (1.71 * 0.9 * sqrt(pow($wlu, 3)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt5')->orderBy('created_at', 'desc')->first();
        $gt5 = floatval($data['nilai']) / 100;
        $z = $wlu - $gt5;
        $debit = (0.88 * 1.5 * $gt5 * sqrt(2 * 9.8 * abs($wlu - $gt5)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt6')->orderBy('created_at', 'desc')->first();
        $gt6 = floatval($data['nilai']) / 100;
        $debit = (0.88 * 1.5 * $gt6 * sqrt(2 * 9.8 * abs($wlu - $gt6)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt7')->orderBy('created_at', 'desc')->first();
        $gt7 = floatval($data['nilai']) / 100;
        $debit = (0.758 * 1.5 * $gt7 * sqrt(2 * 9.8 * abs($wlu - $gt7)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt8')->orderBy('created_at', 'desc')->first();
        $gt8 = floatval($data['nilai']) / 100;
        $debit = (0.758 * 1.5 * $gt8 * sqrt(2 * 9.8 * abs($wlu - $gt8)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt9')->orderBy('created_at', 'desc')->first();
        $gt9 = floatval($data['nilai']) / 100;
        $debit = (0.758 * 1.5 * $gt9 * sqrt(2 * 9.8 * abs($wlu - $gt9)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt10')->orderBy('created_at', 'desc')->first();
        $gt10 = floatval($data['nilai']) / 100;
        $debit = (0.758 * 1.5 * $gt10 * sqrt(2 * 9.8 * abs($wlu - $gt10)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);
    }

    public function debit_bpk8()
    {
        $model1 = new bpk8();
        $model2 = new debitbpk8();
        $data = $model1->where('sensor', 'wl1')->orderBy('created_at', 'desc')->first();
        $wlu = floatval($data['nilai']) / 100;

        $data = $model1->where('sensor', 'gt1')->orderBy('created_at', 'desc')->first();
        $gt1 = floatval($data['nilai']) / 100;
        $debit = (0.25 * 1.2 * $gt1 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt2')->orderBy('created_at', 'desc')->first();
        $gt2 = floatval($data['nilai']) / 100;
        $debit = (0.25 * 1.2 * $gt2 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt3')->orderBy('created_at', 'desc')->first();
        $gt3 = floatval($data['nilai']) / 100;
        $debit = (0.525 * 1.2 * $gt3 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt4')->orderBy('created_at', 'desc')->first();
        $gt4 = floatval($data['nilai']) / 100;
        $debit = (0.525 * 1.2 * $gt4 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt5')->orderBy('created_at', 'desc')->first();
        $gt5 = floatval($data['nilai']) / 100;
        $debit = (0.585 * 0.6 * $gt5 * sqrt(2 * 9.8 * abs($wlu - $gt5)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt6')->orderBy('created_at', 'desc')->first();
        $gt6 = floatval($data['nilai']) / 100;
        $debit = (0.202 * 0.6 * $gt6 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt7')->orderBy('created_at', 'desc')->first();
        $gt7 = floatval($data['nilai']) / 100;
        $debit = (0.5 * 1.2 * $gt7 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt8')->orderBy('created_at', 'desc')->first();
        $gt8 = floatval($data['nilai']) / 100;
        $debit = (0.5 * 1.2 * $gt8 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);

        $data = $model1->where('sensor', 'gt9')->orderBy('created_at', 'desc')->first();
        $gt9 = floatval($data['nilai']) / 100;
        $debit = (0.5 * 1.2 * $gt9 * sqrt(2 * 9.8 * $wlu));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);
    }


    public function debit_bmj1()
    {
        $model1 = new bmj1();
        $model2 = new debitbmj1();
        $data = $model1->where('sensor', 'wlu')->orderBy('created_at', 'desc')->first();
        $wlu = floatval($data['nilai']) / 100;

        $data = $model1->where('sensor', 'gt1')->orderBy('created_at', 'desc')->first();
        $gt1 = floatval($data['nilai']) / 100;
        $debit = (0.585 * 0.44 * $gt1 * sqrt(2 * 9.8 * abs($wlu - $gt1)));
        $data = [
            'gate' => $data['sensor'],
            'debit' => $debit,
        ];
        $model2->save($data);
    }

    public function get_debit_bsa1($sensor)
    {
        $model = new debitbsa1();
        $data = $model->where('gate', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }

    public function get_debit_bsa10($sensor)
    {
        $model = new debitbsa10();
        $data = $model->where('gate', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }

    public function get_debit_bpk8($sensor)
    {
        $model = new debitbpk8();
        $data = $model->where('gate', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }

    public function get_debit_bmj1($sensor)
    {
        $model = new debitbmj1();
        $data = $model->where('gate', $sensor)->orderBy('created_at', 'desc')->first();
        return $this->response->setJSON($data);
    }

    public function get_supply_bsa1()
    {
        $model = new debitbsa1();
        $data1 = $model->where('gate', 'gt1')->orderBy('created_at', 'desc')->first();
        $data2 = $model->where('gate', 'gt2')->orderBy('created_at', 'desc')->first();
        $data3 = $model->where('gate', 'gt3')->orderBy('created_at', 'desc')->first();
        $data4 = $model->where('gate', 'gt4')->orderBy('created_at', 'desc')->first();
        $data['nilai'] = (round($data1['debit'] + $data2['debit'] + $data3['debit'] + $data4['debit'], 3));
        return $this->response->setJSON($data);
    }

    public function get_supply_bpk8()
    {
        $model = new debitbpk8();
        $data1 = $model->where('gate', 'gt1')->orderBy('created_at', 'desc')->first();
        $data2 = $model->where('gate', 'gt2')->orderBy('created_at', 'desc')->first();
        $data3 = $model->where('gate', 'gt3')->orderBy('created_at', 'desc')->first();
        $data4 = $model->where('gate', 'gt4')->orderBy('created_at', 'desc')->first();
        $data['nilai'] = (round($data1['debit'] + $data2['debit'] + $data3['debit'] + $data4['debit'], 3));
        return $this->response->setJSON($data);
    }

    public function get_supply_bsa10()
    {
        $model = new debitbsa10();
        $data1 = $model->where('gate', 'gt1')->orderBy('created_at', 'desc')->first();
        $data2 = $model->where('gate', 'gt2')->orderBy('created_at', 'desc')->first();
        $data3 = $model->where('gate', 'gt3')->orderBy('created_at', 'desc')->first();
        $data4 = $model->where('gate', 'gt4')->orderBy('created_at', 'desc')->first();
        $data5 = $model->where('gate', 'gt5')->orderBy('created_at', 'desc')->first();
        $data6 = $model->where('gate', 'gt6')->orderBy('created_at', 'desc')->first();
        $data7 = $model->where('gate', 'gt7')->orderBy('created_at', 'desc')->first();
        $data8 = $model->where('gate', 'gt8')->orderBy('created_at', 'desc')->first();
        $data9 = $model->where('gate', 'gt9')->orderBy('created_at', 'desc')->first();
        $data10 = $model->where('gate', 'gt10')->orderBy('created_at', 'desc')->first();
        $data['nilai'] = (round($data1['debit'] + $data2['debit'] + $data3['debit'] + $data4['debit'] + $data5['debit'] + $data6['debit'] + $data7['debit'] + $data8['debit'] + $data9['debit'] + $data10['debit'], 3));
        return $this->response->setJSON($data);
    }
}
