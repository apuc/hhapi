<?php
/**
 * Created by PhpStorm.
 * User: kirill
 * Date: 15.11.18
 * Time: 22:24
 */

namespace core\service;


use core\lib\Company;
use core\lib\Vacancy;

class HHService
{

    /**
     * @param $id
     * @return Company
     */
    public function company($id)
    {
        return new Company($id);
    }

    /**
     * @param $id
     * @return Vacancy
     */
    public function vacancy($id)
    {
        return new Vacancy($id);
    }

    /**
     * @return HHService
     */
    public static function run()
    {
        return new self();
    }

}