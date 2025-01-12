<?php

namespace SatisfactoryAPI\Enums;

enum PrivilegeLevel: string
{
    case NotAuthenticated = 'NotAuthenticated';
    case Client = 'Client';
    case Administrator = 'Administrator';
    case InitialAdmin = 'InitialAdmin';
    case APIToken = 'APIToken';
}