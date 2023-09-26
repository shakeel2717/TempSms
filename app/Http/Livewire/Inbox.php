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
    public $messages;
    public $showInbox = false;

    public function mount()
    {
        $this->timer = 5;
        $this->fetchNewMessages();
    }
    public function showTimerPage()
    {
        $this->hideAll();
        $this->showTimer = true;
    }

    public function timerMethod()
    {
        $this->timer--;
        if ($this->timer <= 0) {
            $this->showTimerButton = true;
        }
    }

    public function showInboxPage() // Renamed from showTimer
    {
        $this->hideAll();
        $this->showInbox = true;
    }

    public function hideAll()
    {
        $this->showContinueButton = false;
        $this->showTimer = false;
        $this->showInbox = false;
    }

    public function fetchNewMessages()
    {
        sleep(1);
        $this->messages = $this->number->messages()->get();
    }

    public function inboxRefresh()
    {
        $this->fetchNewMessages();
    }

    public function render()
    {
        return view('livewire.inbox');
    }
}