<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Bsa1;
use App\Models\Bsa10;
use App\Models\Bpk8;
use App\Models\Bmj1;
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

    public function get_bsa1($sensor)
    {
        $model = new bsa1();
        $data = $model->where('sensor', $sensor)->orderBy('created_at', 'desc')->first();
        header('Content-Type: application/json');
        echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }

    public function get_bsa10($sensor)
    {
        $model = new bsa10();
        $data = $model->where('sensor', $sensor)->orderBy('created_at', 'desc')->first();
        header('Content-Type: application/json');
        echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }

    public function get_bpk8($sensor)
    {
        $model = new bpk8();
        $data = $model->where('sensor', $sensor)->orderBy('created_at', 'desc')->first();
        header('Content-Type: application/json');
        echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }

    public function get_bmj1($sensor)
    {
        $model = new bmj1();
        $data = $model->where('sensor', $sensor)->orderBy('created_at', 'desc')->first();
        header('Content-Type: application/json');
        echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
}
