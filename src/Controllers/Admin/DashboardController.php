<?php
namespace Pc\XuongOop\Controllers\Admin;

use Pc\XuongOop\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
