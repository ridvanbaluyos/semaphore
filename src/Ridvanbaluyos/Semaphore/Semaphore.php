<?php namespace Ridvanbaluyos\Semaphore;

use Illuminate\Support\Facades\Config;

class Semaphore
{
    protected $api_key;
    protected $from;

    /**
     * Initialise semaphore configuration
     * @return void
     */
    protected function _init()
    {
        $this->api_key = Config::get('semaphore::api_key');
        $this->from = Config::get('semaphore::from');
    }

    /**
     * Send a new sms
     *
     * @param string       $message
     * @param string       $recipient
     * @param bool         $mustInit
     *
     * @return object      Semaphore response
     */
    public function send($message, $recipient, $mustInit = true)
    {
        if ($mustInit) $this->_init();

        $params = array(
            'api' => $this->api_key,
            'number' => $recipient,
            'message' => $message,
            'from' => $this->from,
        );

        $query = http_build_query($params);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, Config::get('semaphore::url.sms.sms'));
        curl_setopt($ch, CURLOPT_POST, count($params));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    /**
     * Check account balance and status
     *
     * @return object   Semaphore response
     */
    public function account($mustInit = true)
    {
        if ($mustInit) $this->_init();

        $params = array(
            'api' => $this->api_key,
        );

        $query = http_build_query($params);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, Config::get('semaphore::url.sms.account') . '?' . $query);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    /**
     * Fetch messages logs in json format. It is paginated by 100 results.
     *
     * @param integer $page     the page number
     *
     */
    public function messages($page = 1, $mustInit = true)
    {
        if ($mustInit) $this->_init();

        $params = array(
            'api' => $this->api_key,
            'page' => $page,
        );

        $query = http_build_query($params);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, Config::get('semaphore::url.messages.messages') . '?' . $query);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}
