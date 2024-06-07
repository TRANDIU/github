<?php
namespace Pc\XuongOop\Commons;

// './src/Commons/Controler.php';
use eftec\bladeone\BladeOne;

class Controller
{
    protected function renderViewClient($templateDir, $view, $data = [])
    {
        $templatePath = __DIR__ . '/../Views/Client' . $templateDir;
        $compiledPath = __DIR__ . '/../Views/Compiles';

        $blade = new BladeOne($templatePath, $compiledPath, BladeOne::MODE_AUTO);

        // echo $blade->run($view, $data);
        try {
            echo $blade->run($view, $data);
        } catch (\Exception $e) {
            // Log or handle the exception as needed
            echo 'An error occurred while rendering the view: ', $e->getMessage();
        }
    }

    protected function renderViewAdmin($view, $data = [])
    {
        $templatePath = __DIR__ . '/../Views/Admin';
        $compiledPath = __DIR__ . '/../Views/Compiles';

        $blade = new BladeOne($templatePath, $compiledPath, BladeOne::MODE_AUTO);

        // echo $blade->run($view, $data);
        try {
            echo $blade->run($view, $data);
        } catch (\Exception $e) {
            // Log or handle the exception as needed
            echo 'An error occurred while rendering the view: ', $e->getMessage();
        }

    }

}
?>