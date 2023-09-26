<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Inbox extends Component
{
    public $number;
    public $showContinueButton = true;
    public $showTimerButton = false;
    public $showTimer = false;
    public $timer;
    public $inboxTimer = 5;
    public $inboxTimerSection = false;
    public $messages;
    public $showInbox = false;

    public function mount()
    {
        $this->timer = 5;
        info('mount');
        $this->fetchNewMessages();
    }
    public function showTimerPage()
    {
        $this->hideAll();
        info('shotimerpage');
        $this->showTimer = true;
    }

    public function timerMethod()
    {
        info('timermethod');
        $this->timer--;
        if ($this->timer <= 0) {
            $this->showTimerButton = true;
        }
    }

    public function startInboxTimer()
    {
        info('startinboxtimer');
        $this->inboxTimer = 5;
        $this->inboxTimerSection = true;
    }

    public function inboxTimerMethod()
    {
        info('nboxtimermethod');
        $this->inboxTimer--;
        if ($this->inboxTimer <= 0) {
            info($this->inboxTimer);
            $this->fetchNewMessages();
            $this->inboxTimerSection = false;
        }
    }

    public function showInboxPage() // Renamed from showTimer
    {
        info('showinboxpage');
        $this->hideAll();
        $this->showInbox = true;
    }

    public function hideAll()
    {
        info('hideall');
        $this->showContinueButton = false;
        $this->showTimer = false;
        $this->showInbox = false;
    }

    public function fetchNewMessages()
    {
        info('fetchnewmessages');
        $this->messages = $this->number->messages()->get();
    }

    public function render()
    {
        return view('livewire.inbox');
    }
}
