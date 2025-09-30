# Allow Own Discussion Rename
[English](README.md) | [简体中文](README.zh-CN.md)

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/huoxin/allow-own-discussion-rename.svg)](https://packagist.org/packages/huoxin/allow-own-discussion-rename) [![Total Downloads](https://img.shields.io/packagist/dt/huoxin/allow-own-discussion-rename.svg)](https://packagist.org/packages/huoxin/allow-own-discussion-rename)

本扩展是 [flarum/framework#3692](https://github.com/flarum/framework/issues/3692) 的临时修复方案。功能逻辑代码完全照搬 [Flarum Core](https://github.com/flarum/framework/blob/a46ce07255219093fb6f77e16ea7c7108a5f61aa/framework/core/src/Discussion/Access/DiscussionPolicy.php#L33C1-L33C73)。即便在标签权限限制导致没有 `discussion.rename` 权限时，它也允许用户重命名自己创建的讨论。

> [!WARNING]
> 本扩展通过 `forceAllow()` 覆盖来自 Tags 策略的权限。这是有意为之，但可能与其他更改权限的扩展产生冲突。
>
> 在使用前请充分测试。
>
> 在该问题得到官方修复后，建议移除/禁用本扩展。

## 功能说明

当用户是该 **讨论的创建者** 并且 **有权限进行回复** 时，将依据以下设置判断是否允许重命名：

<img height="256" alt="image" src="https://github.com/user-attachments/assets/fe53130d-1776-4249-9316-db1f2e434f8d" />

若不满足上述条件，则仍遵循其他策略（例如 Tag 策略）的权限设置：

<img height="128" alt="image" src="https://github.com/user-attachments/assets/b2cc62e9-bdd1-4109-af80-d4f7877b3591" />

## 安装

使用 Composer 安装：

```sh
composer require huoxin/allow-own-discussion-rename:"*"
```

## 更新

```sh
composer update huoxin/allow-own-discussion-rename:"*"
php flarum migrate
php flarum cache:clear
```

## 链接

- [Packagist](https://packagist.org/packages/huoxin/allow-own-discussion-rename)
- [GitHub](https://github.com/huoxin233/allow-own-discussion-rename)
- [Discuss](https://discuss.flarum.org/d/38239-allow-own-discussion-rename)


