<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
    <h1>Jobeet</h1>
    <div class="row">
        <div class="col-lg-6">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search the Posted Job">
                <div class="input-group-append">
                    <button class="btn btn-secondary" type="button">
                        <i class="fa fa-search"></i> Search
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <input type="submit" class="btn btn-secondary" value="Post a Job">
        </div>
    </div>
    <h4 class="mt-3">Post a Job</h4>
    <div class="row">
        <div class="col-lg-2">
            <label for="category">Category</label>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <select class="form-control" id="category">
                    <option value="" selected="selected">--</option>
                    <option value="1">Designer</option>
                    <option value="3">Programmer</option>
                    <option value="2">Full Stack Developer</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label>Type</label>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Full Time</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Part Time</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option2">
                    <label class="form-check-label" for="inlineRadio3">Freelance</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="company">Company</label>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control"  name="company" id="company" value="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="logo">Logo</label>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="file" class="form-control-file" id="logo">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="url">URL</label>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control"  name="url" id="url" value="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="position">Position</label>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control"  name="position" id="position" value="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="location">Location</label>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control"  name="location" id="location" value="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="description">Description</label>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <textarea name="description" id="description" cols="72" rows="5"></textarea>
            </div>
        </div>
    </div>
    <a href="<?php echo site_url('top/list') ?>">Job List</a>
</div>