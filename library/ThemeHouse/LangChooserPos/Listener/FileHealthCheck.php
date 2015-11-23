<?php

class ThemeHouse_LangChooserPos_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/LangChooserPos/Extend/XenForo/ControllerPublic/Login.php' => '20ba762599905e11399da6ab4aa2dcf0',
                'library/ThemeHouse/LangChooserPos/Install/Controller.php' => 'dd9be6feb36c776f6b7f292b8b0c1ede',
                'library/ThemeHouse/LangChooserPos/Listener/ContainerPublicParams.php' => 'f035489569a02ee0ff0e13807ffcc543',
                'library/ThemeHouse/LangChooserPos/Listener/LoadClass.php' => '44223e3bcbf2ab7916654ecfc613f443',
                'library/ThemeHouse/LangChooserPos/Listener/TemplateCreate.php' => '26d14fa68d0e66a0e95e12a116f022ae',
                'library/ThemeHouse/LangChooserPos/Listener/TemplateHook.php' => '0dc6b4a06dc5911fc720cb48ccbda2a9',
                'library/ThemeHouse/LangChooserPos/Listener/TemplatePostRender.php' => 'a33d788378c3158fcaeb915b202579ce',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/ContainerParams.php' => '43bf59af9f140f58f665be373ac07320',
                'library/ThemeHouse/Listener/ContainerParams/20150106.php' => '36fa6f85128a9a9b2b88210c9abe33bd',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
                'library/ThemeHouse/Listener/Template.php' => '0aa5e8aabb255d39cf01d671f9df0091',
                'library/ThemeHouse/Listener/Template/20150106.php' => '8d42b3b2d856af9e33b69a2ce1034442',
                'library/ThemeHouse/Listener/TemplateCreate.php' => '6bdeb679af2ea41579efde3e41e65cc7',
                'library/ThemeHouse/Listener/TemplateCreate/20150106.php' => 'c253a7a2d3a893525acf6070e9afe0dd',
                'library/ThemeHouse/Listener/TemplateHook.php' => 'a767a03baad0ca958d19577200262d50',
                'library/ThemeHouse/Listener/TemplateHook/20150106.php' => '71c539920a651eef3106e19504048756',
                'library/ThemeHouse/Listener/TemplatePostRender.php' => 'b6da98a55074e4cde833abf576bc7b5d',
                'library/ThemeHouse/Listener/TemplatePostRender/20150106.php' => 'efccbb2b2340656d1776af01c25d9382',
            ));
    }
}