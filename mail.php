<?php
    /*------------File upload----------------*/
    $filenameee =  $_FILES['govtId']['name'];
    $fileName = $_FILES['govtId']['tmp_name'];
  
    
    /*==========Content Upload=================*/
    $CountryLocation = $_POST['CountryLocation'];
    $Lname = $_POST['Lname'];
    $Fname = $_POST['Fname'];
    $Mname = $_POST['Mname'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $ZipCode = $_POST['ZipCode'];
    $Bphone = $_POST['Bphone'];
    $EmailPBO = $_POST['EmailPBO'];
    $DateOfBirth = $_POST['DateOfBirth'];
    $Age = $_POST['Age'];
    $SocialSecNum = $_POST['SocialSecNum'];
    $UsCitizen = $_POST['UsCitizen'];
    $DoYouHaveGreenCard = $_POST['DoYouHaveGreenCard'];
    $Gender = $_POST['Gender'];
    $Heightinches = $_POST['Heightinches'];
    $weightIbs = $_POST['weightIbs'];
    $WaistInches = $_POST['WaistInches'];
    $HipsInches = $_POST['HipsInches'];
    $BustSize = $_POST['BustSize'];
    $BustCup = $_POST['BustCup'];
    $HairColor = $_POST['HairColor'];
    $HairlenghtInch = $_POST['HairlenghtInch'];
    $HairSizeOf = $_POST['HairSizeOf'];
    $HairSizeOfM = $_POST['HairSizeOfM'];
    $HairSizeOfL = $_POST['HairSizeOfL'];
    $HairSizeOfVL = $_POST['HairSizeOfVL'];
    $HairSizeOfSL = $_POST['HairSizeOfSL'];
    $HairSizeOfBd = $_POST['HairSizeOfBd'];
    $EyeColor = $_POST['EyeColor'];
    $SkinColor = $_POST['SkinColor'];
    $ShoeSize = $_POST['ShoeSize'];
    $DressSize = $_POST['DressSize'];
    $AfricanAmerican = $_POST['AfricanAmerican'];
    $AsianAmerican = $_POST['AsianAmerican'];
    $African = $_POST['African'];
    $Asian = $_POST['Asian'];
    $Aboriginal = $_POST['Aboriginal'];
    $EastermBlock = $_POST['EastermBlock'];
    $Mispanic = $_POST['Mispanic'];
    $MiddleEasterm = $_POST['MiddleEasterm'];
    $NativeAmerican = $_POST['NativeAmerican'];
    $Polynesian = $_POST['Polynesian'];
    $NoExperience = $_POST['NoExperience'];
    $SomeExperience = $_POST['SomeExperience'];
    $Experienced = $_POST['Experienced'];
    $VeryExperienced = $_POST['VeryExperienced'];
    $Advenced = $_POST['Advenced'];
    $Amateur = $_POST['Amateur'];
    $SemiProfessional = $_POST['SemiProfessional'];
    $Professional = $_POST['Professional'];
    $PrintEditorial = $_POST['PrintEditorial'];
    $Runway = $_POST['Runway'];
    $Swimwear = $_POST['Swimwear'];
    $Artists = $_POST['Artists'];
    $Fashion = $_POST['Fashion'];
    $Hair = $_POST['Hair'];
    $LingerieUnderwear = $_POST['LingerieUnderwear'];
    $PartModeling = $_POST['PartModeling'];
    $Glamour = $_POST['Glamour'];
    $SportFitness = $_POST['SportFitness'];
    $ArtisticNude = $_POST['ArtisticNude'];
    $Web = $_POST['Web'];
    $Advertising = $_POST['Advertising'];
    $MagazinePrint = $_POST['MagazinePrint'];
    $TradeshowAppearances = $_POST['TradeshowAppearances'];
    $Classical = $_POST['Classical'];
    $ContemporaryHipHop = $_POST['ContemporaryHipHop'];
    $OtherOption = $_POST['OtherOption'];
    $EventOne = $_POST['EventOne'];
    $EventTwo = $_POST['EventTwo'];
    $EventThree = $_POST['EventThree'];
    $EventFour = $_POST['EventFour'];
    $EventFive = $_POST['EventFive'];
    $YouSpeakAnotherLanguage = $_POST['YouSpeakAnotherLanguage'];
    $AFTRA = $_POST['AFTRA'];
    $SAG = $_POST['SAG'];
    $NATAS = $_POST['NATAS'];
    $Braces = $_POST['Braces'];
    $Glasses = $_POST['Glasses'];
    $HearingImpaired = $_POST['HearingImpaired'];
    $HearingImpaired = $_POST['Handicap'];
    $webPage = $_POST['webPage'];
    $SpecialInformation = $_POST['SpecialInformation'];
    $GeneralComments = $_POST['GeneralComments'];
    $CreditsAwards = $_POST['CreditsAwards'];
    $lnameTwo = $_POST['lnameTwo'];
    $fnameTwo = $_POST['fnameTwo'];
    $MiddleTwo = $_POST['MiddleTwo'];
    $AddressTwo = $_POST['AddressTwo'];
    $CityTwo = $_POST['CityTwo'];
    $StateTwo = $_POST['StateTwo'];
    $$ZipCodeTwo = $_POST['ZipCodeTwo'];
    $PhobeMBOTwo = $_POST['PhobeMBOTwo'];
    $EmailPBOTwo = $_POST['EmailPBOTwo'];
    $SelectRelation = $_POST['SelectRelation'];
    $Speechmarried = $_POST['Speechmarried'];
    $CommentTwo = $_POST['CommentTwo'];
    $inlineRadioOptions = $_POST['inlineRadioOptions'];
    $inlineRadio1Box = $_POST['inlineRadio1Box'];
    $inlineRadioOptions1 = $_POST['inlineRadioOptions1'];
    $inlineRadio1Box1 = $_POST['inlineRadio1Box1'];
    $ActingChkb = $_POST['ActingChkb'];
    $SingingChkb = $_POST['SingingChkb'];
    $DancingChkb = $_POST['DancingChkb'];
    $AdultEntertainerChkb = $_POST['AdultEntertainerChkb'];
    $StripperChkb = $_POST['StripperChkb'];
    $NudeModelingChkb = $_POST['NudeModelingChkb'];
    $PornVideosChkb = $_POST['PornVideosChkb'];
    
    
    
    
    $message ="Country Location = ". $CountryLocation .
            "\r\n Last Name = " . $Lname . 
            "\r\n First Name = " . $Fname . 
            "\r\n Middile Name = " . $Mname . 
            "\r\n Address = " . $Address .
            "\r\n City = " . $City . 
            "\r\n State = " . $State . 
            "\r\n Zip Code = " . $ZipCode . 
            "\r\n Phone(Mobile, Business, Other) = " . $Bphone . 
            "\r\n Email(Personal, Business, Other) = " . $EmailPBO . 
            "\r\n Date Of Birth = " . $DateOfBirth .
            "\r\n Age = " . $Age .
            "\r\n Social security number = " . $SocialSecNum .
            "\r\n Are You A US Citizen? = " . $UsCitizen . 
            "\r\n Do You Have A Green Card? = " . $DoYouHaveGreenCard . 
            "\r\n Gender = " . $Gender . 
            "\r\n Height(Inches) = " . $Heightinches .
            "\r\n Weight(Ibs) = " . $weightIbs . 
            "\r\n Waist(Inches) = " . $WaistInches . 
            "\r\n Hips(Inches) = " . $HipsInches .
            "\r\n Chest/Bust Size(Inches) = " . $BustSize .
            "\r\n Bust Cup(Inches) = " . $BustCup . 
            "\r\n Hair Color = " . $HairColor . 
            "\r\n Hair Lenght(Inches) = " . $HairlenghtInch ." And" .$HairSizeOf 
            .$HairSizeOfM .$HairSizeOfL .$HairSizeOfVL .$HairSizeOfSL .$HairSizeOfBd .
            "\r\n Hair Color = " . $HairColor .
            "\r\n Eye Color = " . $EyeColor . 
            "\r\n Skin Color = " . $SkinColor . 
            "\r\n Shoe Size = " . $ShoeSize .
            "\r\n Dress Size = " . $DressSize .
            "\r\n Ethnic Descent = " .$AfricanAmerican .$AsianAmerican .$African .$Asian .
            $Aboriginal .$Caucasian .$EastermBlock .$Mispanic .$Indian .$MiddleEasterm .$NativeAmerican .
            $Polynesian .
            "\r\n Experience = " .$NoExperience .$SomeExperience .$Experienced .$VeryExperienced .
            $Advenced .
            "\r\n Professional Status = " .$Amateur .$SemiProfessional .$Professional . 
            "\r\n Ethnic Descent = " .$PrintEditorial .$Runway .$Swimwear .$Artists .
            $Fashion .$Hair .$LingerieUnderwear .$PartModeling .$Glamour .$SportFitness .$ArtisticNude .
            $Web .$Advertising .$MagazinePrint .$TradeshowAppearances .
            "\r\n Dance = " .$Classical .$ContemporaryHipHop .$OtherOption .
            "\r\n List Last 5 Jobs/Events = ". 
            "\r\n 1. " . $EventOne . 
            "\r\n 2. " . $EventTwo .
            "\r\n 3. " . $EventThree .
            "\r\n 4. " . $EventFour .
            "\r\n 5. " . $EventFive .
            "\r\n Do You Speak Another Language? = " . $YouSpeakAnotherLanguage .
            "\r\n Professional Affiliarions = " .$AFTRA .$SAG .$NATAS .
            "\r\n Worth Noting = " .$Braces .$Glasses .$HearingImpaired .$Handicap .
            "\r\n Personal Web Page = " .$webPage . 
            "\r\n Special Information (Skin Blemishes, Tattoos, Etc) = " .$SpecialInformation .
            "\r\n General Comments (Describe Your Interests, Types Of Assignments Etc.) = " .$GeneralComments .
            "\r\n Credits/Awards/Background Info Etc. Include Any Jobs, Awards Or Acknowledgments Here = " .$CreditsAwards .
            "\r\n Emergency Contact: ".
            "\r\n Last Name = " .$lnameTwo .
            "\r\n First Name = " .$fnameTwo .
            "\r\n Middile Name = " .$MiddleTwo .
            "\r\n Address = " .$AddressTwo .
            "\r\n City = " .$CityTwo .
            "\r\n State = " .$StateTwo .
            "\r\n Zip Code = " .$ZipCodeTwo .
            "\r\n Phone(Mobile, Business, Other) = " .$PhobeMBOTwo .
            "\r\n Email(Personal, Business, Other) = " .$EmailPBOTwo .
            "\r\n Relationship to you = " .$SelectRelation .
            "\r\n Other: ".
            "\r\n Speech Married = " . $Speechmarried . 
            "\r\n Comment = " . $CommentTwo .
            "\r\n Have you been convinced of a felony? = " .$inlineRadioOptions .$inlineRadio1Box .
            "\r\n Have you got any pending charges? = " . $inlineRadioOptions1 .$inlineRadio1Box1 .
            "\r\n Model Acting Singing Dance Adult Entertainert: " .
            "\r\n Primary Talent = " .$ActingChkb .$SingingChkb .$DancingChkb .
            "\r\n Adult Entertainer = " .$AdultEntertainerChkb .$StripperChkb .$NudeModelingChkb .$PornVideosChkb;
            
            
            
            
    
    $subject ="Joliez Agency Inc Talent Information Form:";
    $fromname ="Joliez Agency Inc Talent";
    $fromemail = 'noreply@codeconia.com';  //if u dont have an email create one on your cpanel

    $mailto = 'antonio.beasley@gmail.com';  //the email which u want to recv this email

    /*File upload Content*/
    $content = file_get_contents($fileName);
    $content = chunk_split(base64_encode($content));
    // a random hash will be necessary to send mixed content
    $separator = md5(time());
    // carriage return type (RFC)
    $eol = "\r\n";
    // main header (multipart mandatory)
    
    $headers = "From: ".$fromname." <".$fromemail.">" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
    $headers .= "This is a MIME encoded message." . $eol;
    // message
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $message . $eol;
    
    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $content . $eol;
    $body .= "--" . $separator . "--";
    
    
    //SEND Mail
    if (mail($mailto, $subject, $body, $headers)) {
        header("Location: index.html");
    } else {
        echo "mail send ... ERROR!";
        print_r( error_get_last() );
    }
    
    
    
?>