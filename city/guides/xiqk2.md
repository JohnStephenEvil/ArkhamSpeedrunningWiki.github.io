# Mousewheel Binds for Skipping Dialogue, Countering, etc
- By [cojo](https://www.speedrun.com/user/cojo)
- Updated December 14th, 2020

Here is how you set up the optimal mousewheel bindings for this game. Alternatively, if you are fine with using the game's default binds, we have a pre-made file in the [Resources section](https://www.speedrun.com/arkhamcity/resources).

* Open the game's Launcher, choose Settings -> Controls
* Unassign "Previous Gadget" and "Next Gadget" (also make sure mouse wheel isn't being used anywhere else)
* Assign Mouse Scroll Up to "Run/Glide/Use"
* Assign Shift+Mouse Scroll Up to "Counter/Takedown"
* Assign Shift+Mouse Scroll Down to "Strike"

When you're done all that, close the launcher. Opening the launcher again will reset everything we're about to do, so **never open the launcher again, if you do you will need to redo the next step and any other config file edits that you do.**

Then, open the UserInput.ini file found here > "Documents\WB Games\Batman Arkham City GOTY\BmGame\Config\UserInput.ini"

 and add this full exact line, including the period at the end:

.Bindings=(Name="MouseScrollDown",Command="QuickGadgetB | VenomShockwave | BlockBreaker | ExitAgilityMode | SkipCutscene | CancelGadget | DebugMenuSelectB | CancelBatarangCamera", Shift=false, bIgnoreShift=true)

With all that setup, you'll have:
-Mouse Wheel Down skips dialog
-Mouse Wheel Up opens grates, dive rolls, etc
-Shift+Mouse Wheel Up counters (for the Ra's boss fight)
-Shift+Mouse Wheel Down strikes (mainly for Hammer/Sickle fights)