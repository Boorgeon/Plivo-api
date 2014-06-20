<?php

/**
 * The <PreAnswer> element answers the incoming call in early media mode.
 * This is useful when you want to play custom caller tunes or to speak
 * specified text dynamically while the call is still in an unanswered state.
 *
 * @author Boorgeon <boorgeon@gmail.com>, Serge NTONG <sergentong@gmail.com>
 */
class Boorgeon_Plivo_Response_PreAnswer extends Boorgeon_Plivo_Response_Element
{

    /**
     * Get GetDigits.
     *
     * @return Boorgeon_Plivo_Response_GetDigits
     */
    public function getdigits()
    {
        $getdigits = new Boorgeon_Plivo_Response_GetDigits();

        $this->_value[] = $getdigits;

        return $getdigits;
    }

    /**
     * Get Message.
     *
     * @param string $text
     *
     * @return Boorgeon_Plivo_Response_Message
     */
    public function message($text)
    {
        $message = new Boorgeon_Plivo_Response_Message($text);

        $this->_value[] = $message;

        return $message;
    }

    /**
     * Get Play.
     *
     * @param string $url
     *
     * @return Boorgeon_Plivo_Response_Play
     */
    public function play($url)
    {
        $play = new Boorgeon_Plivo_Response_Play($url);

        $this->_value[] = $play;

        return $play;
    }

    /**
     * Get Redirect.
     *
     * @param string $url
     *
     * @return Boorgeon_Plivo_Response_Redirect
     */
    public function redirect($url)
    {
        $redirect = new Boorgeon_Plivo_Response_Redirect($url);

        $this->_value[] = $redirect;

        return $redirect;
    }

    /**
     * Get Speak.
     *
     * @param string $text
     *
     * @return Boorgeon_Plivo_Response_Speak
     */
    public function speak($text)
    {
        $speak = new Boorgeon_Plivo_Response_Speak($text);

        $this->_value[] = $speak;

        return $speak;
    }

    /**
     * Get Wait.
     *
     * @return Boorgeon_Plivo_Response_Wait
     */
    public function wait()
    {
        $wait = new Boorgeon_Plivo_Response_Wait();

        $this->_value[] = $wait;

        return $wait;
    }

}
