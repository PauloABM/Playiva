<div class="container">
    <div class="block">
        <div class="box">
            <div class="tabs is-toggle is-fullwidth is-large">
            <ul>
                <li id="tab1-learn" class="is-active" onclick="setTab1('learn')">
                    <a>
                        <span>Learn</span>
                    </a>
                </li>
                <li id="tab1-improve" onclick="setTab1('improve')">
                    <a>
                        <span>Improve</span>
                    </a>
                </li>
            </ul>
            </div>
            <div class="block">
                <div class="box">
                    <div class="tabs is-toggle is-fullwidth is-large">
                    <ul>
                        <li id="tab2-foundation" class="is-active" onclick="setTab2('foundation')">
                            <a>
                                <span>Foundation</span>
                            </a>
                        </li>
                        <li id="tab2-play" onclick="setTab2('play')">
                            <a>
                                <span>Play</span>
                            </a>
                        </li>
                    </ul>
                    </div>
                    <div class="block">
                        <div class="columns">
                            <div class="column is-one-quarter">
                                <span class="is-capitalized has-text-weight-semibold is-size-5">Filters</span>
                                <div class="field">
                                    <span class="is-capitalized has-text-weight-semibold is-size-7">Language</span>
                                    <?php
                                    if ($languages) {
                                        foreach($languages as $key => $value) {
                                    ?>
                                    <div class="control">
                                        <label class="checkbox has-text-weight-light is-size-6">
                                            <input type="checkbox" value="<?= $value['id'] ?>">
                                            <?= $value['name'] ?>
                                        </label>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                    <div class="control">
                                        <a>
                                            <span>Show more</span>
                                            <span class="icon is-small"><i class="fas fa-chevron-down" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="control">
                                            No languages found :(
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="field">
                                    <span class="is-capitalized has-text-weight-semibold is-size-7">Channel</span>
                                    <?php
                                    if ($channels) {
                                        foreach($channels as $key => $value) {
                                    ?>
                                    <div class="control">
                                        <label class="checkbox has-text-weight-light is-size-6">
                                            <input type="checkbox" value="<?= $value['id'] ?>">
                                            <?= $value['name'] ?>
                                        </label>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                    <div class="control">
                                        <a>
                                            <span>Show more</span>
                                            <span class="icon is-small"><i class="fas fa-chevron-down" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="control">
                                            No channels found :(
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="field">
                                    <span class="is-capitalized has-text-weight-semibold is-size-7">Instrument</span>
                                    <div class="control">
                                        <div class="select">
                                            <select>
                                                <?php
                                                if ($instruments) {
                                                    foreach($instruments as $key => $value) {
                                                ?>
                                                <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                                                <?php
                                                    }
                                                } else {
                                                ?>
                                                <option disabled selected>No instrument found</option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <span class="is-capitalized has-text-weight-semibold is-size-7">Technique</span>
                                    <?php
                                    if ($techniques) {
                                        foreach($techniques as $key => $value) {
                                    ?>
                                    <div class="control">
                                        <label class="checkbox has-text-weight-light is-size-6">
                                            <input type="checkbox" value="<?= $value['id'] ?>">
                                            <?= $value['name'] ?>
                                        </label>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                    <div class="control">
                                        <a>
                                            <span>Show more</span>
                                            <span class="icon is-small"><i class="fas fa-chevron-down" aria-hidden="true"></i></span>
                                        </a>
                                    </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="control">
                                            No techniques found :(
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="column">
                                <div class="field has-addons has-addons-right">
                                    <div class="control">
                                        <input class="input" type="text" placeholder="Find a lecture">
                                    </div>
                                    <div class="control">
                                        <a class="button is-primary">
                                            <span class="icon is-small">
                                                <i class="fas fa-search"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="level">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <div>
                                                <p>Video name</p>
                                                <div class="control">
                                                    <iframe width="620" height="350"
                                                        src="https://www.youtube.com/embed/tgbNymZ7vqY" title="video">
                                                    </iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="level-right">
                                        <div class="level-item">
                                            <div class="container">
                                                <p>Channel name</p>
                                                <p>Techniques</p>
                                                <div class="teste">
                                                    <div class="tag is-rounded">One</div>
                                                    <div class="tag is-rounded">One</div>
                                                    <div class="tag is-rounded">One</div>
                                                    <div class="tag is-rounded">One</div>
                                                    <div class="tag is-rounded">One</div>
                                                    <div class="tag is-rounded">One</div>
                                                    <div class="tag is-rounded">One</div>
                                                    <div class="tag is-rounded">One</div>
                                                    <div class="tag is-rounded">One</div>
                                                    <div class="tag is-rounded">One</div>
                                                    <div class="tag is-rounded">One</div>
                                                    <div class="tag is-rounded">One</div>
                                                </div>
                                                <div class="control">
                                                    <a>
                                                        <span>Show more</span>
                                                        <span class="icon is-small"><i class="fas fa-chevron-down" aria-hidden="true"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>