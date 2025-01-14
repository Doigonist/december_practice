<?php
 $errcodes = [
    'Операция была успешно совершена.',
    'Пользователь не был обнаружен в базе данных. Начинаю загрузку модального окна для подтверждения регистрации...',
    'Операция была отменена изза отсутсвия нужных данных.',
    'Пользователь существует. Начинается загрузка личного кабинета...',
    'Это сообщение об ошибке фейковое и создано исключительно для того что-бы отнять твоё время...'
];
class ErrMsg{
    public $errcodes;
    public function ReturnErrorByCode($code){
        return $this ->errcodes[$code];
    }
    public function __construct($errcodes){
        $this->errcodes = $errcodes;
    }
}
$returnmsg = new ErrMsg($errcodes);