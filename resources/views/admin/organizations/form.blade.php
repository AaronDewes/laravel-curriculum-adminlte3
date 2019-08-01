@csrf
@include ('forms.input.text', 
            ["model" => "organization", 
            "field" => "title", 
            "placeholder" => "curriculum Headquarter",  
            "required" => true, 
            "value" => old('title', isset($organization) ? $organization->title : '')])

@include ('forms.input.textarea', 
            ["model" => "organization", 
            "field" => "description", 
            "placeholder" => "Description",  
            "rows" => 3, 
            "value" => old('title', isset($organization) ? $organization->description : '')]) 

@include ('forms.input.text', 
            ["model" => "organization", 
            "field" => "street", 
            "placeholder" => "Curriculumstreet 1",  
            "value" => old('street', isset($organization) ? $organization->street : '')])

@include ('forms.input.text', 
            ["model" => "organization", 
            "field" => "postcode", 
            "placeholder" => "76831",  
            "value" => old('postcode', isset($organization) ? $organization->postcode : '')])

@include ('forms.input.text', 
            ["model" => "organization", 
            "field" => "city", 
            "placeholder" => "Ilbesheim",  
            "value" => old('city', isset($organization) ? $organization->city : '')])

@include ('forms.input.text', 
            ["model" => "organization", 
            "field" => "phone", 
            "placeholder" => "123/4567890",  
            "value" => old('phone', isset($organization) ? $organization->phone : '')])

@include ('forms.input.text', 
            ["model" => "organization", 
            "field" => "email", 
            "placeholder" => "mail@curriculumonline.de",  
            "value" => old('email', isset($organization) ? $organization->email : '')])
                
@include ('forms.input.select', 
            ["model" => "status",
            "show_label" => true,
            "field" => "status_id",  
            "options"=> $statuses, 
            "option_label"=> "lang_de", 
            "value" => old('status_id', isset($organization->status_id) ? $organization->status_id : '') ])                                                          

<div>
    <input class="btn btn-info" type="submit" value="{{ $buttonText }}">
</div>