<?php
/*---------------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 *  Licensed under the MIT License. See License.txt in the project root for license information.
 *--------------------------------------------------------------------------------------------*/

namespace PhpParser\Node;

use PhpParser\Node;
use PhpParser\NodeKind;
use PhpParser\Token;

class CaseStatementNode extends Node {
    /** @var Token */
    public $caseKeyword;
    /** @var Expression */
    public $expression;
    /** @var Token */
    public $defaultLabelTerminator;
    /**@var StatementNode[] */
    public $statementList;

    public function __construct() {
        parent::__construct(NodeKind::CaseStatementNode);
    }
}