<?php

namespace Tomaj\Prepositioner;

class Factory
{
    public static function build(string $language, string $escapeString = '#####'): Prepositioner
    {
        $className = '\Tomaj\Prepositioner\\' . ucfirst($language) . 'Language';
        if (class_exists($className)) {
            $language = new $className;
            return new Prepositioner($language->prepositions(), $escapeString);
        }

        throw new LanguageNotExistsException("Language class '$className' doesn't exists");
    }
}
