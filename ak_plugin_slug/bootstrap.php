<?php
require "vendor/autoload.php";
// include_once $_SERVER['DOCUMENT_ROOT'] . '/wp-config.php';
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection([
   "driver"    => "mysql",
   "host"      => DB_HOST,
   "database"  => DB_NAME,
   "username"  => DB_USER,
   "password"  => DB_PASSWORD
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();



function create_table(){
   require plugin_dir_path( __FILE__ ) . "./database/User.php";
   require plugin_dir_path( __FILE__ ) . "./database/Todo.php";
}
// if (!function_exists('dd')) {
//    /**
//     * Dump the passed variables and end the script.
//     *
//     * @param  mixed
//     * @return void
//     */
//    function dd()
//    {
//        array_map(function ($value) {
//            if (class_exists(Symfony\Component\VarDumper\Dumper\CliDumper::class)) {
//                $dumper = 'cli' === PHP_SAPI ?
//                    new Symfony\Component\VarDumper\Dumper\CliDumper :
//                    new Symfony\Component\VarDumper\Dumper\HtmlDumper;
//                $dumper->dump((new Symfony\Component\VarDumper\Cloner\VarCloner)->cloneVar($value));
//            } else {
//                var_dump($value);
//            }
//        }, func_get_args());
//        die(1);
//    }
// }