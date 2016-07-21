<?php

    namespace Qntm\LaravelMaterializeSass;

    use Illuminate\Support\Facades\Facade;

    class MaterializeSass extends Facade {

        protected static function getFacadeAccessor() { return 'materialize-sass'; }

    }

?>