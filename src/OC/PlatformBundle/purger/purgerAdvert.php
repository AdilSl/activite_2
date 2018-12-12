<?php
/**
 * Created by PhpStorm.
 * User: adil
 * Date: 11/12/18
 * Time: 07:28
 */

namespace OC\PlatformBundle\purger;

use OC\PlatformBundle\Repository\AdvertRepository;
use Doctrine\ORM\EntityManager;

class purgerAdvert
{


    private $entityManager;



    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;

    }


    /**
     * @param $days
     * @return mixed
     */
    public function purge($days){

        //on recupere la liste des adverts dont la date de modification est plus vieille que $days jours et qui n'ayant pas de candidature

        $listAdverts = $this->entityManager->getRepository('OC\PlatformBundle\Entity\Advert')->getAdvertByDays($days);

       foreach ($listAdverts as $advert) {

           $qb = $this->createQueryBuilder('a')->delete($this->find($advert->getId()));

        }

       return $r;

    }

}