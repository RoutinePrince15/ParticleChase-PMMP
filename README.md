[![Telegram](https://img.shields.io/badge/Telegram-PresentKim-blue.svg?logo=telegram)](https://t.me/PresentKim)

[![icon/192x192](assets/icon/192x192.png?raw=true)]()

[![License](https://img.shields.io/github/license/Blugin/ParticleChase-PMMP.svg?label=License)](LICENSE)
[![Release](https://img.shields.io/github/release/Blugin/ParticleChase-PMMP.svg?label=Release)](https://github.com/Blugin/ParticleChase-PMMP/releases/latest)
[![Download](https://img.shields.io/github/downloads/Blugin/ParticleChase-PMMP/total.svg?label=Download)](https://github.com/Blugin/ParticleChase-PMMP/releases/latest)


A plugin set particle fallow player for PocketMine-MP

## Command
Main command : `/particlechase <set | remove | list | lang | reload | save>`

| subcommand | arguments                                           | description                |
| ---------- | --------------------------------------------------- | -------------------------- |
| Set        | \<player name\> \<particle name\> \[mode\] \[data\] | Set player's particle      |
| Remove     | \<player name\>                                     | Remove player's particle   |
| List       | \[page\]                                            | Show particle setting list |




## Permission
| permission               | default | description       |
| ------------------------ | ------- | ----------------- |
| particlechase.cmd        | OP      | main command      |
|                          |         |                   |
| particlechase.cmd.set    | OP      | set subcommand    |
| particlechase.cmd.remove | OP      | remove subcommand |
| particlechase.cmd.list   | OP      | list subcommand   |