<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 01-06-2017 06:08
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace RestBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ClientRegistrationController extends Controller
{
    public function testSecureResourceAction()
    {
        return new JsonResponse( [
            "key1"=> "value1",
            "key2"=> "value2",
        ] );
    }
}
