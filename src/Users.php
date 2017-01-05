<?php
require_once 'SearchInterface.php';


class Users implements SearchInterface
{
    private $table = [
        [
            "Name"=> "William",
            "Title"=> "Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis",
            "Reviews"=> "sagittis"
        ],
        [
            "Name"=> "Kelly",
            "Title"=> "tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget",
            "Reviews"=> "tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla"
        ],
        [
            "Name"=> "Barclay",
            "Title"=> "Proin non massa non ante bibendum ullamcorper. Duis cursus, diam",
            "Reviews"=> "dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi"
        ],
        [
            "Name"=> "Amal",
            "Title"=> "a neque. Nullam ut nisi a odio semper cursus. Integer",
            "Reviews"=> "natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus."
        ],
        [
            "Name"=> "Lawrence",
            "Title"=> "magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla",
            "Reviews"=> "id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec"
        ],
        [
            "Name"=> "Beck",
            "Title"=> "Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem.",
            "Reviews"=> "ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu tellus. Phasellus elit pede, malesuada vel, venenatis vel, faucibus id,"
        ],
        [
            "Name"=> "Erasmus",
            "Title"=> "Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit,",
            "Reviews"=> "Integer tincidunt aliquam"
        ],
        [
            "Name"=> "Herman",
            "Title"=> "tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi",
            "Reviews"=> "gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est,"
        ],
        [
            "Name"=> "Kirk",
            "Title"=> "nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet",
            "Reviews"=> "eu"
        ],
        [
            "Name"=> "Tad",
            "Title"=> "Aliquam ornare, libero at auctor ullamcorper, nisl arcu iaculis enim,",
            "Reviews"=> "facilisis, magna tellus faucibus leo,"
        ],
        [
            "Name"=> "Marvin",
            "Title"=> "et netus et malesuada fames ac turpis egestas. Fusce aliquet",
            "Reviews"=> "turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada"
        ],
        [
            "Name"=> "Gary",
            "Title"=> "nibh. Donec est mauris, rhoncus id, mollis nec, cursus a,",
            "Reviews"=> "rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce dolor quam, elementum at,"
        ],
        [
            "Name"=> "Otto",
            "Title"=> "mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin",
            "Reviews"=> "dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit."
        ],
        [
            "Name"=> "Griffin",
            "Title"=> "velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus.",
            "Reviews"=> "purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est"
        ],
        [
            "Name"=> "Yuli",
            "Title"=> "dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum",
            "Reviews"=> "nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed"
        ],
        [
            "Name"=> "Nasim",
            "Title"=> "elit. Aliquam auctor, velit eget laoreet posuere, enim nisl elementum",
            "Reviews"=> "turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu."
        ],
        [
            "Name"=> "Porter",
            "Title"=> "aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque",
            "Reviews"=> "eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam"
        ],
        [
            "Name"=> "Wade",
            "Title"=> "nec enim. Nunc ut erat. Sed nunc est, mollis non,",
            "Reviews"=> "fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec, leo. Morbi neque"
        ],
        [
            "Name"=> "Octavius",
            "Title"=> "dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui.",
            "Reviews"=> "molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper"
        ],
        [
            "Name"=> "Joshua",
            "Title"=> "ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit",
            "Reviews"=> "ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor,"
        ],
        [
            "Name"=> "Barrett",
            "Title"=> "quam. Pellentesque habitant morbi tristique senectus et netus et malesuada",
            "Reviews"=> "non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros."
        ],
        [
            "Name"=> "Nehru",
            "Title"=> "dui, in sodales elit erat vitae risus. Duis a mi",
            "Reviews"=> "purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce"
        ],
        [
            "Name"=> "Wing",
            "Title"=> "netus et malesuada fames ac turpis egestas. Fusce aliquet magna",
            "Reviews"=> "egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat"
        ],
        [
            "Name"=> "Troy",
            "Title"=> "lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet",
            "Reviews"=> "Duis elementum, dui quis accumsan convallis, ante lectus convallis est,"
        ],
        [
            "Name"=> "Ahmed",
            "Title"=> "nec, imperdiet nec, leo. Morbi neque tellus, imperdiet non, vestibulum",
            "Reviews"=> "et, rutrum non, hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec"
        ],
        [
            "Name"=> "Tobias",
            "Title"=> "lacus, varius et, euismod et, commodo at, libero. Morbi accumsan",
            "Reviews"=> "conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare."
        ],
        [
            "Name"=> "Caleb",
            "Title"=> "metus eu erat semper rutrum. Fusce dolor quam, elementum at,",
            "Reviews"=> "quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula."
        ],
        [
            "Name"=> "Scott",
            "Title"=> "risus. Morbi metus. Vivamus euismod urna. Nullam lobortis quam a",
            "Reviews"=> "sapien. Aenean massa. Integer vitae nibh. Donec est mauris, rhoncus id, mollis nec,"
        ],
        [
            "Name"=> "Blaze",
            "Title"=> "purus gravida sagittis. Duis gravida. Praesent eu nulla at sem",
            "Reviews"=> "Morbi neque tellus, imperdiet non, vestibulum"
        ],
        [
            "Name"=> "Leo",
            "Title"=> "et tristique pellentesque, tellus sem mollis dui, in sodales elit",
            "Reviews"=> "nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus"
        ],
        [
            "Name"=> "Alfonso",
            "Title"=> "Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas",
            "Reviews"=> "fringilla ornare placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a"
        ],
        [
            "Name"=> "Dylan",
            "Title"=> "aliquam eros turpis non enim. Mauris quis turpis vitae purus",
            "Reviews"=> "sed, facilisis vitae, orci. Phasellus dapibus quam quis diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices"
        ],
    ];

// do some search
    function search($word)
    {

        $result = [];
        // do some search

        foreach ($this->table as $record) {
            foreach ($record as $key => $value) {
                if (strstr($value, $word)) {
                    $result[] = $record;
                }
            }
        }

        return $result;
    }
}

?>