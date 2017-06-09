<?php
/**
 * Author: Joris Rietveld <jorisrietveld@gmail.com>
 * Created: 01-06-2017 05:35
 * Licence: GNU General Public licence version 3 <https://www.gnu.org/licenses/quick-guide-gplv3.html>
 */
declare(strict_types=1);

namespace RestBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AuthenticationController extends Controller
{
    public function tokenAuthenticationAction(Request $request)
    {
        $macAddress = $request->request->get('mac-address');
        $password = $request->request->get('password');

        $user = $this->getDoctrine()->getRepository('RestBundle:Pot')
            ->findOneBy(['potMacAddress' => $macAddress]);

        if (!$user)
        {
            throw $this->createNotFoundException();
        }

        // password check
        if (!$this->get('security.password_encoder')->isPasswordValid($user, $password))
        {
            throw $this->createAccessDeniedException();
        }

        // Use LexikJWTAuthenticationBundle to create JWT token that hold only information about user name
        $token = $this->get('lexik_jwt_authentication.encoder')
            ->encode(['username' => $user->getUsername()]);

        // Return genereted tocken
        return new JsonResponse(['token' => $token]);
    }
}
