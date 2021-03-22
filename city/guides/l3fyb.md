# Using the Autosplitter
- By [ShikenNuggets](https://www.speedrun.com/user/ShikenNuggets)
- Updated July 13th, 2020

Runners playing on PC can automate most of their splits with the autosplitter. It can be configured to split on pre-rendered cutscenes, and at loading zones (such as entering or leaving an area), and a few specific interactions. It can also start the timer automatically at the beginning of a run.

**Enabling the Autosplitter**
To use the autosplitter, open up LiveSplit, right-click and select "Edit Splits". Set the game name of your splits to "Batman: Arkham City". LiveSplit should now say that there is an autosplitter available for this game, then you just click the "Activate" button and you're good to go. This is the easiest way to set this up.

Alternatively, you can download it from the [Resources section](https://www.speedrun.com/arkhamcity/resources) section, and unzip the folder. Then open up LiveSplit, right-click on it and select "Edit Layout". Press the '+' button to add a new section. In the drop-down choose Control->Scriptable Autosplitter. For the script path, set that to the file that you just downloaded.

**Options**
The first set of options are check-boxes that say 'Start' and 'Split'. You'll need to leave 'Split' checked, otherwise the autosplitter will not work. The other toggle, 'Start' determines whether or not the timer will automatically start for you.

'Start' simply detects when a cutscene has been skipped after leaving the main menu. If you run a full-game No Catwoman category (such Any%, Glitchless) this works fine, but if you run a category with Catwoman, or HQR, you will need to use a negative start time in your splits for this to work correctly. Also, if you select a skin before starting a run, make sure you have the "Start After Skin Select" advanced option enabled for this to work correctly.

**Advanced Options**
* "Split on Cutscenes" ticked will cause the timer to split automatically at the beginning of any pre-rendered cutscene.
* "Split on Loading" will split automatically whenever a loading trigger is hit. This includes things like entering or exiting areas, but also some strange ones, such as splitting after a zip that causes a brief load, and splitting half-way up the Wonder Tower climb.
* "Split on Batsuit" will split when interacting with the Batsuit on top of the ACE Chemicals building. I highly recommend using this.
* "Split on Clayface" will split when you interact with Clayface. If you're running a category without Catwoman I highly recommend using this. I do not recommend using this for categories with Catwoman.
* "Start After Skin Select" will adjust to auto-start logic to work if you wish to select a skin before starting your runs.