<?php
namespace App\Shell;

use Cake\Console\Shell;

class ChangeFlgShell extends Shell
{
    public function main()
    {
        $this->loadModel('User');
        $condition = ['cancel_flg' => '1'];
        $updatefield = [
            'paying_flg' => '0',
            'cancel_flg' => '0'
        ];
        $this->User->updateAll($updatefield,$condition);
    }
}