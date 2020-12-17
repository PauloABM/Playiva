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
                                            <input type="checkbox" value="<?= $value['id'] ?>" name="language-checkbox">
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
                                            <input type="checkbox" value="<?= $value['id'] ?>" name="channel-checkbox">
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
                                            <select name="instrument-select">
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
                                            <input type="checkbox" value="<?= $value['id'] ?>" name="technique-checkbox">
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
                                        <input id="search-lecture" class="input" type="text" placeholder="Find a lecture">
                                    </div>
                                    <div class="control">
                                        <a class="button is-primary">
                                            <span class="icon is-small">
                                                <i class="fas fa-search"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                if ($lectures) {
                                    foreach($lectures as $key => $value) {
                                ?>
                                <div class="video">
                                    <div class="columns is-vcentered">
                                        <div class="column">
                                            <p class="mb-1 has-text-weight-semibold is-size-5"><?= $value['name'] ?></p>
                                            <div class="field">
                                                <p class="control">
                                                    <iframe width="550" height="320"
                                                        src="<?= $value['url'] ?>" title="<?= $value['name'] ?>">
                                                    </iframe>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <p class="mb-3 has-text-weight-semibold is-size-5">Channel Name</p>
                                            <p class="mb-1 has-text-weight-semibold is-size-5">Techniques</p>
                                            <div class="tags">
                                                <?php
                                                if ($techniques) {
                                                    foreach($techniques as $key => $value) {
                                                ?>
                                                <div class="tag is-rounded is-dark"><?= $value['name'] ?></div>
                                                <?php
                                                    }
                                                } else {
                                                ?>
                                                <div class="tag is-rounded is-danger">No techniques found :(</div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="control">
                                                <a>
                                                    <span class="has-text-weight-semibold is-size-6">Show more</span>
                                                    <span class="icon is-small"><i class="fas fa-chevron-down" aria-hidden="true"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                } else {
                                ?>
                                <div class="control">
                                    No lectures found :(
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>