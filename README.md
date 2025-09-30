# Allow Own Discussion Rename
[English](README.md) | [简体中文](README.zh-CN.md)

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/huoxin/allow-own-discussion-rename.svg)](https://packagist.org/packages/huoxin/allow-own-discussion-rename) [![Total Downloads](https://img.shields.io/packagist/dt/huoxin/allow-own-discussion-rename.svg)](https://packagist.org/packages/huoxin/allow-own-discussion-rename)

This extension is a temporary workaround for [flarum/framework#3692](https://github.com/flarum/framework/issues/3692). Code logic is taken directly from [Flarum Core](https://github.com/flarum/framework/blob/a46ce07255219093fb6f77e16ea7c7108a5f61aa/framework/core/src/Discussion/Access/DiscussionPolicy.php#L33C1-L33C73). It allows discussion authors to rename their own discussions even when they do not have the `discussion.rename` permission specify by the tag restrictions.

> [!WARNING]
> This extension use `forceAllow()` to override the permission from Tags policy. This is intentional but may conflict with other permission-altering extensions.
> 
> Test fully before use.
> 
> Remove/disable this extension once you upgrade to a version that includes an official fix of the stated issue.

## What it does

If the user is the **discussion author** and **can reply**. It will follow the permission set here:

<img height="256" alt="image" src="https://github.com/user-attachments/assets/fe53130d-1776-4249-9316-db1f2e434f8d" />

If not it will follow to other policy such as the tag policy:

<img height="128" alt="image" src="https://github.com/user-attachments/assets/b2cc62e9-bdd1-4109-af80-d4f7877b3591" />

## Installation

Install with composer:

```sh
composer require huoxin/allow-own-discussion-rename:"*"
```

## Updating

```sh
composer update huoxin/allow-own-discussion-rename:"*"
php flarum migrate
php flarum cache:clear
```

## Links

- [Packagist](https://packagist.org/packages/huoxin/allow-own-discussion-rename)
- [GitHub](https://github.com/huoxin233/flarum-ext-allow-own-discussion-rename)
- [Discuss](https://discuss.flarum.org/d/38239-allow-own-discussion-rename)
