<?php
/**
 * Copyright 2010 Zikula Foundation
 *
 * This work is contributed to the Zikula Foundation under one or more
 * Contributor Agreements and licensed to You under the following license:
 *
 * @license GNU/LGPLv3 (or at your option, any later version).
 * @package Zikula
 * @subpackage HookManager_Storage
 *
 * Please see the NOTICE file distributed with this source code for further
 * information regarding copyright and licensing.
 */

/**
 * Zikula_HookManager_StorageInterface for hooks persistence.
 */
interface Zikula_HookManager_StorageInterface
{
    /**
     * Register a new hook with the persistence layer.
     *
     * @param string $eventName     The name of the hook event.
     * @param string $serviceName   The service name (ID).
     * @param string $hookClass     The name of the class that hosts the event handler.
     * @param string $handlerMethod Name of the method in the hookclass that hosts the event handler.
     *
     * @return void
     */
    public function registerHook($eventName, $serviceName, $hookClass, $handlerMethod);

    /**
     * Unregister a hook by event name and service name.
     *
     * @param integer $id Name of the hook event.
     */
    public function unregisterHook($id);

    /**
     * Get registered hooks from peristence layer.
     *
     * @return array Of hooks.
     */
    public function getHooks();

    /**
     * Find hooks bound to a given object 'who'.
     *
     * @param string $type The hook type (valid only if $who is set).
     * @param string $who  Name of the object to fine hookable events for.
     *
     * @return array
     */
    public function getHookBindings($type = null, $who = null);

    /**
     * Bind a hook with an object.
     *
     * @param string $id  Name Name of the hook.
     * @param string $who The name of the object to hook the event to.
     *
     * @return void
     */
    public function bindHook($id, $who);

    /**
     * Unbind a hook from an object.
     *
     * @param string $id Hookname.
     *
     * @return void
     */
    public function unbindHook($id);
}