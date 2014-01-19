<div id="settings" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="settings-label" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="settings-label" class="text-info">Settings</h3>
    </div>
    <div class="modal-body">
        <fieldset>  		
            <div class="control-group">
                <label class="control-label" for="tubePauseSeconds">Tube pause seconds (<i>-1</i> means the default: <i>3600</i>, <i>0</i> is reserved for un-pause)</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="tubePauseSeconds" type="text" value="<?php if (@empty($_COOKIE['tubePauseSeconds']))
    echo -1;
else
    echo @intval($_COOKIE['tubePauseSeconds']);
?>">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="focusedInput">Auto-refresh interval in milliseconds (Default: <i>500</i>)</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="autoRefreshTimeoutMs" type="text" value="<?php if (@empty($_COOKIE['autoRefreshTimeoutMs']))
    echo 500;
else
    echo @intval($_COOKIE['autoRefreshTimeoutMs']);
?>">
                </div>
            </div>
        </fieldset>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div>