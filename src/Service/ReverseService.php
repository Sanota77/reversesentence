<?php


namespace App\Service;


class ReverseService
{
    const MIN_SIZE = 6;
    public function permutation($sentence)
    {
        $sentenceExplode = explode(' ', $sentence);
        $reverseSentence = $sentence;
        foreach ($sentenceExplode as $word) {
            if (strlen($word) >= self::MIN_SIZE) {
                $end = substr($word, strlen($word) / 2);
                $beg = substr($word, 0, strlen($word) / 2);
                $finalWord = $end . $beg;
                $reverseSentence = str_replace($word, $finalWord, $reverseSentence);
            }
        }

        return $reverseSentence;
    }
}
